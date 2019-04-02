<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsSoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_sold', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 255);
            $table->double('maxPrice', 8, 2);
            $table->char('SellerName', 255);
            $table->char('bidderName', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_sold');
    }
}
