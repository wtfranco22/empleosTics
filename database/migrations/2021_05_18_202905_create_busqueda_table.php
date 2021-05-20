<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusquedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busqueda', function (Blueprint $table) {
            $table->increments('idBusqueda',11);
            $table->unsignedInteger('idRubro');
            $table->foreign('idRubro')->references('idRubro')->on('rubro')->onUpdate('cascade')->onDelete('cascade');
            $table->string('empresa',150)->nullable(false);
            $table->string('titulo',150)->nullable(false);
            $table->string('descripcion',150)->nullable(true);
            $table->timestamps();
            $table->engine='InnoDB';
            $table->charset='latin1';
            $table->collation='latin1_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('busqueda');
    }
}
