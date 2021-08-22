<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('email', 100);
            $table->string('telefono', 20);
            $table->integer('id_compania')->unsigned();
            $table->foreign('id_compania')->references('id')->on('companias')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('empleados', function (Blueprint $table) {
            $table->integer('dato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
