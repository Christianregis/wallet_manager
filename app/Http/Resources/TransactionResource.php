<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'reference' => $this->reference,
            'amount' => $this->amount,
            'fee' => $this->fee,
            'currency' => $this->currency,
            'type' => $this->type?->value,
            'type_label' => $this->type?->label(),
            'status' => $this->status?->value,
            'status_label' => $this->status?->label(),
            'description' => $this->description,
            'sender' => new UserResource($this->whenLoaded('sender')),
            'receiver' => new UserResource($this->whenLoaded('receiver')),
            'created_at' => $this->created_at->format('d-m-Y H:i'),
        ];
    }
}
