<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('editorial', 100);
            $table->string('autor', 100);
            $table->date('fecha_edicion')->nullable();
            $table->string('tipo_tapa', 10);
            $table->string('genero', 50);
            $table->float('precio', 4, 2);
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedor');
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
        Schema::dropIfExists('libro');
    }
}
