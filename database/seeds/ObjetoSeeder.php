<?php

use Illuminate\Database\Seeder;

class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $objetos=array(
        	['idmarca' => '2', 'idpromocao' => '3', 'idcategoria' => '1', 'nome' => 'PINT GUINNESS NORMAL', 'serie' =>'Pubs', 'descricao' => 'Copo pego em pub na Irlanda', 'localidade' => 'Irlanda', 'composicaobasica' => 'vidro', 'corprevalecente' => 'incolor', 'created_at' => new DateTime, 'updated_at' => new dateTime],
            ['idmarca' => '3', 'idpromocao' => '2', 'idcategoria' => '1', 'nome' => 'COPO BUDWEISER COPA 2014', 'serie' =>'Rise as One', 'descricao' => 'Copo de plastico para vender cerveja durante a copa de 2014, pego no Beira rio, jogo de França x Honduras', 'localidade' => 'Brasil', 'composicaobasica' => 'plastico', 'corprevalecente' => 'dourado', 'created_at' => new DateTime, 'updated_at' => new dateTime],
        	
        );
        DB::table('objeto')->insert($objetos);
        $this->command->info('Cadastrando Objetos!');
    }
}
