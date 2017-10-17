<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opening_hours', function (Blueprint $table) {
            $table->integer('salon_id')->unsigned();
            $table->tinyInteger('day_id')->unsigned();
            $table->dateTime('open_at');
            $table->dateTime('closed_at');

            /*foreign keys*/
            $table->foreign('salon_id')
            ->references('salon_id')->on('salons')
            ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opening_hours');
    }
}
