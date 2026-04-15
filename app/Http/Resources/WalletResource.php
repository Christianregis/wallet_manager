<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'currency' => $this->currency,
            'balance' => $this->balance,
            'user_id' => $this->user_id,
            'updated_at' => $this->updated_at->format('d-m-Y H:i:s'),
            'created_at' => $this->created_at->format('d-m-Y H:i:s'),
        ];
    }
}
