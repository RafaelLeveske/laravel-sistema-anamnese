<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('cpf');
            $table->string('nome_pai', 100);
            $table->string('nome_mae', 100);
            $table->date('data_nascimento');
            $table->string('cep');
            $table->string('endereco', 100);
            $table->string('telefone');
            $table->string('uf', 2);
            $table->string('estado_civil', 20);
            $table->integer('psicologo_id');
            $table->longText('queixa_principal');
            $table->longText('caracteristicas_infancia');
            $table->longText('caracteristicas_adolescencia');
            $table->longText('caracteristicas_adulta');
            $table->longText('relacoes_sociais');

            $table->foreign('psicologo_id')->references('id')->on('psicologo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
