<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirugiaMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugia_medicos', function (Blueprint $table) {
            $table->integer('cod_cirugia')->unsigned();
            $table->integer('cod_medico')->unsigned();
            $table->timestamps();

            $table->foreign('cod_medico')->references('cod_medico')->on('medicos');
            $table->foreign('cod_cirugia')->references('cod_cirugia')->on('cirugias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cirugia_medicos');
    }
}
