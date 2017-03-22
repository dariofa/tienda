<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescargosTiqueteraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descargos_tiq', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('id_tiquetera')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->integer('id_comida')->unsigned();
            $table->integer('cantidad'); 

            $table->foreign('id_empleado')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_comida')->references('id')->on('comidas')->onDelete('cascade');
            $table->foreign('id_tiquetera')->references('id')->on('tiqueteras')->onDelete('cascade');


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
        Schema::drop('descargos_tiq');
    }
}
