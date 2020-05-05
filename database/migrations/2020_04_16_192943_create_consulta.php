<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data_hora', 100);
            $table->longText('evolucao');

            //$table->integer('psicologo_id');
            $table->integer('paciente_id');

            //$table->foreign('psicologo_id')->references('id')->on('psicologo');
            $table->foreign('paciente_id')->references('id')->on('paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
