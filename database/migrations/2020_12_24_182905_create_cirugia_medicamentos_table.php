<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirugiaMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugia_medicamentos', function (Blueprint $table) {
            $table->integer('cod_cirugia')->unsigned();
            $table->integer('cod_medicamento')->unsigned();

            $table->timestamps();

            $table->foreign('cod_cirugia')->references('cod_cirugia')->on('cirugias');
            $table->foreign('cod_medicamento')->references('cod_medicamento')->on('medicamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cirugia_medicamentos');
    }
}
