<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('socio');
            $table->string('nome');
            $table->date('data');
            $table->string('horainicio');
            $table->string('horafim');
            $table->string('endereco');
            $table->string('produtos');
            $table->text('complemento');


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
        Schema::drop('agenda');
    }
}