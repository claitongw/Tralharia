<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePromocao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('promocao', function (Blueprint $table){
            $table->increments('idpromocao');
            $table->integer('idmarca')->unsigned()->nullable();
            $table->string('nome');
            $table->string('datalancamento');
            $table->integer('qntitens');
            $table->boolean('status');// s=completa ''=incompleta
            $table->timestamps();
        });

        Schema::table('promocao', function($table) {
            $table->foreign('idmarca')->references('idmarca')->on('marca');
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
        Schema::drop('promocao');
    }
}
