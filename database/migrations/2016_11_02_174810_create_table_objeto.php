<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObjeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('objeto', function (Blueprint $table){
            $table->increments('idobjeto');
            $table->integer('idmarca')->unsigned()->nullable();
            $table->integer('idpromocao')->unsigned()->nullable();
            $table->integer('idcategoria')->unsigned()->nullable();
            $table->string('nome');
            $table->string('serie');//29ª oktoberfest, 11º Planeta Atlantida
            $table->text('descricao', 300);
            $table->string('localidade');//RS, SC, Igrejinha, Brasil, Acre...
            $table->string('composicaobasica'); //vidro, couro, plastico
            $table->string('corprevalecente');
            $table->timestamps();
        });

        Schema::table('objeto', function($table) {
            $table->foreign('idmarca')->references('idmarca')->on('marca');
            $table->foreign('idpromocao')->references('idpromocao')->on('promocao');
            $table->foreign('idcategoria')->references('idcategoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('objeto');
    }
}
