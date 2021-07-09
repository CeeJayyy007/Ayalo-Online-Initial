<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->bigInteger('owner_id')->unsigned()->nullable();
            $table->bigInteger('renter_id')->unsigned()->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('address');
            $table->integer('total_price')->nullable();
            $table->enum('payment_status',['unpaid','paid'])->default('unpaid');
            $table->enum('pick_up_status',['unpicked','picked_up'])->default('unpicked');
            $table->enum('delivery_status',['not_delivered','delivered'])->default('not_delivered');
            $table->enum('return_status',['not_returned','returned'])->default('not_returned');
            $table->enum('status',['open','canceled','closed'])->default('open');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('renter_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
