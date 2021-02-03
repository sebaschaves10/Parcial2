<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('Numero');
            $table->foreign('Numero')->references('Numero')->on('habitacion');
            $table->integer('cliente');
            $table->foreign('cliente')->references('id')->on('cliente');
            $table->datetime('Entrada');
            $table->datetime('Salida');

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
        Schema::dropIfExists('reserva');
    }
}
