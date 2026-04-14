<?php

namespace App;

enum TransactionStatus: string
{
    case PENDING = 'pending';
    case SUCCESS = 'success';
    case FAILED = 'failed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'En attente',
            self::SUCCESS => 'Succès',
            self::FAILED => 'Échec',
        };
    }
}
