<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "category_id", "name", "buy_price", "sell_price", "is_active"
    ];
}
