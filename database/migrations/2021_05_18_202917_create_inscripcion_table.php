<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->increments('idInscripcion',11);
            $table->unsignedInteger('idBusqueda');
            $table->foreign('idBusqueda')->references('idBusqueda')->on('busqueda')->onUpdate('cascade')->onDelete('restrict');
            $table->date('fecha')->nullable(true);
            $table->string('nombre',150)->nullable(true);
            $table->string('apellido',150)->nullable(true);
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
        Schema::dropIfExists('inscripcion');
    }
}
