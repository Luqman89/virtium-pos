<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "category_id"   => ["required", "integer", "exists:categories,id"],
            "name"          => ["required", "string", "min:3", "max:255"],
            "buy_price"     => ["required", "numeric", "min:0"],
            "sell_price"    => ["required", "numeric", "min:0", "gte:buy_price"],
            "is_active"     => ["sometimes", "boolean"],
        ];
    }

    public function attributes()
    {
        return [
            "category_id"   => "Category",
            "name"          => "Name",
            "buy_price"     => "Harga Beli",
            "sell_price"    => "Harga Jual",
            "is_active"     => "Aktif"
        ];
    }
}
