<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('isbn',10);
            $table->string('nombreLibro',50);
            $table->integer('stock');
            $table->integer('editorial');
            $table->foreign('editorial')->references('id')->on('editoriales');
            $table->integer('precio');
            $table->integer('descuento');
            $table->integer('estado')->default(1);

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
        Schema::table('libros', function (Blueprint $table) {
            //
        });
    }
}
