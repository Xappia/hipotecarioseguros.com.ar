<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMprospectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mprospect', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idprospect');
            $table->string('name')->nullable($value = false);
            $table->string('lastname')->nullable($value = false);
            $table->string('dni')->nullable($value = false);
            $table->integer('gender')->nullable($value = false);
            $table->string('timezone')->nullable($value = false);
            $table->integer('idcard');
            $table->string('phonetype');
            $table->integer('phonecode');
            $table->integer('phonenumber');
            $table->string('email');
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
        Schema::dropIfExists('mprospect');
    }
}
