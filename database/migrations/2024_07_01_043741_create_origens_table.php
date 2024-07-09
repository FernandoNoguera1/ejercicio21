<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrigensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origens', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->text('otros_datos');
            $table->unsignedBigInteger('viaje_id'); 
            $table->foreign('viaje_id')->references('id')->on('viajes'); 
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
        Schema::dropIfExists('origens');
    }
}
