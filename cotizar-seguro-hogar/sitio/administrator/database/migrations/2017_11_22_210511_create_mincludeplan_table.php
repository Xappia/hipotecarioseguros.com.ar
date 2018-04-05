<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMincludeplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mincludeplan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idinclude');
            $table->integer('idplan');
            $table->string('coverage')->nullable($value = false);
            $table->decimal('amount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mincludeplan');
    }
}
