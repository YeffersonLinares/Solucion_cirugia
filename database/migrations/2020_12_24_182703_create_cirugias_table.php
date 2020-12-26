<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirugiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugias', function (Blueprint $table) {
            $table->increments('cod_cirugia');
            $table->string('nom_cirugia')->nullable($value = true);
            $table->integer('cod_t_cirugia')->unsigned()->nullable($value = true);
            $table->integer('cod_paciente')->unsigned()->nullable($value = true);
            $table->integer('cod_sitio')->unsigned()->nullable($value = true);
            $table->date('fecha_cirugia')->nullable($value = true);
            $table->timestamps();

            $table->foreign('cod_t_cirugia')->references('cod_t_cirugia')->on('tipo_cirugias');
            $table->foreign('cod_paciente')->references('cod_paciente')->on('pacientes');
            $table->foreign('cod_sitio')->references('cod_sitio')->on('sitios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cirugias');
    }
}
