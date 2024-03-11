<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order_product', function (Blueprint $table){
            $table->id();
            $table->unsignedInteger("order_id");
            $table->foreign("order_id")->refrences("id")->on("orders")->cascadeOnDelete();
            $table->unsignedInteger("product_id");
            $table->foreign("product_id")->refrences("id")->on("products")->cascadeOnDelete();
            $table->unsignedInteger("count");
            $table->decimal('price',13,4);
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
