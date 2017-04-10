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
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->integer('promocao_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->string('nome');
            $table->string('serie');//29ª oktoberfest, 11º Planeta Atlantida
            $table->text('descricao', 300);
            $table->string('localidade');//RS, SC, Igrejinha, Brasil, Acre...
            $table->string('composicaobasica'); //vidro, couro, plastico
            $table->string('corprevalecente');
            $table->timestamps();
        });

        Schema::table('objeto', function($table) {
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->foreign('promocao_id')->references('id')->on('promocao');
            $table->foreign('categoria_id')->references('id')->on('categoria');
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
