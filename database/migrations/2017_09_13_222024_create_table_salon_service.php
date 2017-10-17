<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSalonService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->integer('salon_id')->unsigned();
            $table->foreign('salon_id')->references('salon_id')->on('salons');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('service_id')->on('services');
            $table->tinyInteger('price');
            $table->tinyInteger('duration');
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
