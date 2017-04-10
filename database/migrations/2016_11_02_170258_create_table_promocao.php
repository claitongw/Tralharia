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
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->string('nome');
            $table->string('datalancamento');
            $table->integer('qntitens');
            $table->boolean('status');// s=completa ''=incompleta
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
        //
        Schema::drop('promocao');
    }
}
