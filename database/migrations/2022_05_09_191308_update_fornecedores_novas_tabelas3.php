<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFornecedoresNovasTabelas3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('uf',2);
            $table->string('email',100);
        });

        Schema::create('teste2', function (Blueprint $table){
            $table->string('teste',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teste');
        Schema::table('fornecedores', function(Blueprint $table){
            $table->dropColumn('uf');
            $table->dropColumn('email');
        });
    }
}
