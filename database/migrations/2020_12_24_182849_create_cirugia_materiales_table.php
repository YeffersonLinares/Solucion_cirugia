<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirugiaMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugia_materiales', function (Blueprint $table) {
            $table->integer('cod_cirugia')->unsigned();
            $table->integer('cod_materiales')->unsigned();
            $table->timestamps();

            $table->foreign('cod_cirugia')->references('cod_cirugia')->on('cirugias');
            $table->foreign('cod_materiales')->references('cod_materiales')->on('materiales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cirugia_materiales');
    }
}
