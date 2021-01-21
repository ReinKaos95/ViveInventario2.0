<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pres_salida');
            $table->timestamp('pres_fecha_salida');
            $table->timestamp('pres_fecha_entrada');
            $table->integer('usuarios_us_id')->references('id')->on('users');
            $table->integer('equipos_eq_id')->references('id')->on('equipos');
            $table->string('pres_estatus');
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
        Schema::dropIfExists('prestamo_equipos');
    }
}
