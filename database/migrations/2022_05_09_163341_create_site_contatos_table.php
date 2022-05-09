<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Função que será responsável para criar minha tabela do tipo Contato no banco de dados
    {
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 100);
            $table->string('telefone',11);
            $table->string('email',100);
            $table->integer('motivo');
            $table->text('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Função que me permite exluir a tabela Contato
    {
        Schema::dropIfExists('site_contatos');
    }
}
