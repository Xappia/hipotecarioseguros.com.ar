<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mplan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idplan');
            $table->integer('type')->nullable($value = false);
            $table->integer('initscore');
            $table->integer('finalscore');
            $table->string('plan')->nullable($value = false);
            $table->string('image')->nullable($value = false);
            $table->decimal('amount1')->default(0);
            $table->decimal('amount2')->default(0);
            $table->decimal('amount3')->default(0);
            $table->decimal('amount4')->default(0);
            $table->string('coverage1');
            $table->string('coverage2');
            $table->string('coverage3');
            $table->string('coverage4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mplan');
    }
}
