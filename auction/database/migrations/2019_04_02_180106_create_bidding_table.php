<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('SellerName', 255);
            $table->string('photo', 500)->nullable();
            $table->char('name', 255);
            $table->double('startPrice', 8, 2);
            $table->double('noOfBid', 8, 2);
            $table->double('currentBid', 8, 2);
            $table->dateTime('bidDeadline');
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
        Schema::dropIfExists('bidding');
    }
}
