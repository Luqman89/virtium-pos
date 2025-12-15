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
            "id"            => $this->id,
            "code"          => $this->code,
            "qty"           => $this->qty,
            "buy_price"     => $this->buy_price,
            "sell_price"    => $this->sell_price,
            "amount_buy"    => $this->amount_buy,
            "amount_sell"   => $this->amount_sell,
            "profit"        => $this->profit,
            "note"          => $this->note,
            "created_at"    => $this->created_at,
            "product"       => $this->whenLoaded("product", [
                "id"        => $this->product?->id,
                "name"      => $this->product?->name,
            ]),
            "user"          => $this->whenLoaded("user", [
                "id"        => $this->user->id,
                "name"      => $this->user->name
            ])
        ];
    }
}
