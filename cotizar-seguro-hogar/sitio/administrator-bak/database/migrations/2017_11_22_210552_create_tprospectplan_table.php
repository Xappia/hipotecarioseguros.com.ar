<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTprospectplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tprospectplan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idprospect');
            $table->integer('idplan')->nullable($value = false);
            $table->string('jsonscore')->nullable($value = false);
            $table->integer('score')->nullable($value = false);
            $table->date('answerdate');
            $table->decimal('amount1')->default(0);
            $table->decimal('amount2')->default(0);
            $table->decimal('amount3')->default(0);
            $table->decimal('amount4')->default(0);
            $table->string('coverage1');
            $table->string('coverage2');
            $table->string('coverage3');
            $table->string('coverage4');
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
        Schema::dropIfExists('tprospectplan');
    }
}
