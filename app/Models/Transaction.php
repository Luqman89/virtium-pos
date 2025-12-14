<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        "user_id", "product_id", "qty", "buy_price", "sell_price", "amount_buy", "amount_sell", "profit", "note", "code"
    ];
}
