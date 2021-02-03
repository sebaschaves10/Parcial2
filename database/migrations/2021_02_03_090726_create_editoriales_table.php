<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombreEditorial',50);
            $table->string('direccion',255);
            $table->string('ciudad',50);
            $table->string('telefono',10);

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
        Schema::table('editoriales', function (Blueprint $table) {
            //
        });
    }
}
