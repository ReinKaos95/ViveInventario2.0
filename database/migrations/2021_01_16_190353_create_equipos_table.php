<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eq_modelo');
            $table->string('eq_marca');
            $table->string('eq_serial');
            $table->integer('eq_tequid')->references('teq_id')->on('tipo_equipos');
            $table->string('eq_nbiennacional');
            $table->string('eq_estatus');
            $table->integer('departamentos_dep_id')->references('dep_id')->on('departamentos');
             //$table->integer('ubicacion_equipo_ubeq')->references('ubeq_id')->on('ubicacion_equipos');
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
        Schema::dropIfExists('equipos');
    }
}
