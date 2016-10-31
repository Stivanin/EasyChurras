<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contrato');
            $table->string('nome');
            $table->string('endereco');
            $table->string('cpf');
            $table->string('nascimento');
            $table->string('rg');
            $table->string('ctps');
            $table->string('cargo');
            $table->string('salario');
            $table->string('vencimento');
            $table->string('telefone');
            $table->string('email');
            $table->string('hora');
            $table->string('beneficios');
            $table->string('complemento');
            
            
            
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
        Schema::drop('funcionarios');
    }
}
