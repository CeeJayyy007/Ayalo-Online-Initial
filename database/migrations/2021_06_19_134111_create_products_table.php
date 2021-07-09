<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->integer('daily_rate');
            $table->integer('causion_fee');
            $table->enum('availability',['available','rented_out']);
            $table->string('address');
            $table->string('colour')->nullable();
            $table->string('size')->nullable();
            $table->enum('condition',['good','fairly-good','bad']);
            $table->bigInteger('state_id');
            $table->bigInteger('city_id');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
