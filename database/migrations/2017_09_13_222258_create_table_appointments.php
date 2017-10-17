<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->biginteger('product_id')->unsigned()->nullable(false);
            $table->integer('user_id')->unsigned()->nullable(false);

            $table->date('created_at')->nullable(false);
            $table->date('order_datetime')->nullable(false);
            $table->smallInteger('order_status_id')->unsigned()->nullable(false);
            $table->string('client_note')->nullable();

            /*foreign keys*/
            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('product_id')
            ->references('product_id')
            ->on('products');
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
