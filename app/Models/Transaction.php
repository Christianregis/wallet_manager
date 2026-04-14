<?php

namespace App\Models;

use App\TransactionStatus;
use App\TransactionType;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'amount',
        'currency',
        'status',
        'description',
        'type',
        'fee',
        'sender_id',
        'receiver_id',
        'reference',
    ];

    protected $casts = [
        'status' => TransactionStatus::class,
        'type' => TransactionType::class,
        'amount' => 'decimal:2',
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
