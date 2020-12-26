<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('cod_paciente');
            $table->string('nom_paciente')->nullable($value = true);
            $table->string('cedula')->nullable($value = true);
            $table->date('fec_nacimiento')->nullable($value = true);
            $table->string('email')->unique();
            $table->string('contrasenia');
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
        Schema::dropIfExists('pacientes');
    }
}
