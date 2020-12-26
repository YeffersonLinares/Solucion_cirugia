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
            $table->integer('cod_t_cirugia')->nullable($value = true);
            $table->integer('cod_paciente')->nullable($value = true);
            $table->integer('cod_sitio')->nullable($value = true);
            $table->date('fecha_cirugia')->nullable($value = true);
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
        Schema::dropIfExists('cirugias');
    }
}
