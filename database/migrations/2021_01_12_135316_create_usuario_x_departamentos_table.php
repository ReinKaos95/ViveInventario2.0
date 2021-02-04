<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioXDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_x_departamentos', function (Blueprint $table) {
            $table->increments('usxdp_id');
            $table->string('usxdp_descripcion');
            $table->string('usxdp_estatus');
            $table->integer('usxdp_uscedula');
            $table->integer('usxdp_dpid');
            $table->foreign('usxdp_uscedula')->references('cedula')->on('users');
            $table->foreign('usxdp_dpid')->references('dep_id')->on('departamentos');
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
        Schema::dropIfExists('usuario_x_departamentos');
    }
}