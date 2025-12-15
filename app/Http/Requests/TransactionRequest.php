<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            "user_id"       => ["required", "exists:users,id"],
            "product_id"    => ["required", "exists:products,id"],
            "code"          => ["required", "string", "max:100", "unique:transactions,code"],
            "qty"           => ["required", "integer", "min:1"],
            "buy_price"     => ["required", "numeric", "min:0"],
            "sell_price"    => ["required", "numeric", "min:0", "gte:buy_price"],
            "amount_buy"    => ["required", "numeric", "min:0"],
            "amount_sell"   => ["required", "numeric", "min:0"],
            "note"          => ["nullable"],
        ];
    }

    public function attributes()
    {
        return [
            'code'        => 'Kode Transaksi',
            'qty'         => 'Jumlah',
            'buy_price'   => 'Harga Beli',
            'sell_price'  => 'Harga Jual',
            'amount_buy'  => 'Total Modal',
            'amount_sell' => 'Total Penjualan',
            'note'        => 'Catatan',
        ];
    }
}
