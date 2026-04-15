<?php

namespace App\Http\Controllers;

use App\Http\Requests\transaction\SendMoneyRequest;
use App\Http\Resources\TransactionResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\WalletResource;
use App\Models\Transaction;
use App\Models\User;
use App\TransactionStatus;
use App\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $query = Transaction::with(['sender', 'receiver'])
            ->where(fn ($query) => $query->where('sender_id', $user->id)->orWhere('receiver_id', $user->id));

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('type')) {
            $query->where('type', $request->input('type'));
        }

        $transactions = $query->latest()->get();

        return Inertia::render('transactions/Index', [
            'wallet' => $user->wallets()->first() ? new WalletResource($user->wallets()->first()) : null,
            'transactions' => TransactionResource::collection($transactions),
            'transactionTypes' => collect(TransactionType::cases())->map(fn ($type) => ['value' => $type->value, 'label' => $type->label()]),
            'transactionStatuses' => collect(TransactionStatus::cases())->map(fn ($status) => ['value' => $status->value, 'label' => $status->label()]),
            'recipients' => UserResource::collection(User::where('id', '!=', $user->id)->get()),
            'filters' => [
                'type' => $request->input('type'),
                'status' => $request->input('status'),
            ],
        ]);
    }

    public function send(SendMoneyRequest $request)
    {
        $sender = $request->user();
        $receiver = User::findOrFail($request->input('receiver_id'));
        $amount = $request->input('amount');

        if ($sender->id === $receiver->id) {
            return back()->withErrors(['receiver_id' => 'Le destinataire doit être un autre utilisateur.']);
        }

        $senderWallet = $sender->wallets()->firstOrCreate([
            'currency' => $request->input('currency'),
        ], [
            'balance' => 0,
        ]);

        $receiverWallet = $receiver->wallets()->firstOrCreate([
            'currency' => $request->input('currency'),
        ], [
            'balance' => 0,
        ]);

        if ($senderWallet->balance < $amount) {
            return back()->withErrors(['amount' => 'Solde insuffisant pour effectuer ce transfert.']);
        }

        DB::transaction(function () use ($senderWallet, $receiverWallet, $sender, $receiver, $request, $amount) {
            $fee = number_format(0, 2, '.', '');

            $senderWallet->decrement('balance', $amount);
            $receiverWallet->increment('balance', $amount);

            Transaction::create([
                'sender_id' => $sender->id,
                'receiver_id' => $receiver->id,
                'amount' => $amount,
                'fee' => $fee,
                'currency' => $request->input('currency'),
                'reference' => uniqid('txn_', true),
                'status' => TransactionStatus::SUCCESS,
                'type' => TransactionType::SEND,
                'description' => $request->input('description'),
            ]);
        });

        return redirect()->route('transactions.index')->with('success', 'Le transfert a été effectué avec succès.');
    }
}
