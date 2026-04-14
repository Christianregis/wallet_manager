<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\WalletResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $wallets = $user->wallets()
            ->orderByDesc('updated_at')
            ->get();

        $recentTransactions = Transaction::with(['sender', 'receiver'])
            ->where(fn ($query) => $query->where('sender_id', $user->id)->orWhere('receiver_id', $user->id))
            ->latest()
            ->take(10)
            ->get();

        return Inertia::render('Dashboard', [
            'user' => new UserResource($user),
            'wallets' => WalletResource::collection($wallets),
            'recentTransactions' => TransactionResource::collection($recentTransactions),
            'summary' => [
                'balance' => $wallets->sum('balance'),
                'walletCount' => $wallets->count(),
                'transactionCount' => $recentTransactions->count(),
            ],
        ]);
    }
}
