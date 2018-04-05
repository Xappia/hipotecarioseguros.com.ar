<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMquestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mquestion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idQuestion');
            $table->string('question')->nullable($value = false);
            $table->integer('type');
            $table->string('phpfile');
            $table->integer('score');
            $table->string('jsonscore');
            $table->integer('highlight');
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
        Schema::dropIfExists('mquestion');
    }
}
