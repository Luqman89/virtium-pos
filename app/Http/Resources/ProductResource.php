<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            "name"          => $this->name,
            "buy_price"     => $this->buy_price,
            "sell_price"    => $this->sell_price,
            "is_active"     => $this->is_active,
            "created_at"    => $this->created_at,
            "category"      => $this->whenLoaded("category", [
                "id"        => $this->category?->id,
                "name"      => $this->category?->name,
            ]),
        ];
    }
}
