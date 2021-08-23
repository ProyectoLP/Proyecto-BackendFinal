<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abogados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('calificacion');
            $table->string('contacto');
            $table->string('direccion');
            $table->unsignedBigInteger('tipoabogado_id');
            $table->foreign('tipoabogado_id')->references('id')->on('tipoabogados');
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
        Schema::dropIfExists('abogados');
    }
}
