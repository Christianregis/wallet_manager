<?php

namespace App;

enum TransactionType: string
{
    case SEND = 'send';
    case RECEIVE = 'receive';
    public function label(): string
    {
        return match ($this) {
            self::SEND => 'Envoyer',
            self::RECEIVE => 'Recevoir',
        };
    }
}
