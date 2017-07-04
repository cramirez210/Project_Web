<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Archivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->index();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('direccion');
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
        Schema::dropIfExists('archivos');
    }
}
