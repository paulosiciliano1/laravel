<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     **/
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyInteger('role_id', true)->unsigned();
            $table->string('role')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     **/
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
