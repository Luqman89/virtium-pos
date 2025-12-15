<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("product_id")->constrained()->cascadeOnDelete();
            $table->string("code")->unique();
            $table->integer("qty");
            $table->decimal("buy_price");
            $table->decimal("sell_price");
            $table->decimal("amount_buy");
            $table->decimal("amount_sell");
            $table->decimal("profit");
            $table->string("note")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
