<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        factory(App\Marca::class, 4)->create();

        factory(App\Marca::class, 3)->create()->each(function ($c){
            for($i=0; $i<=9; $i++) {
                $c->promocao()->save(factory(\App\Promocao::class)->make());
            }
        });

//        //
//        $marcas=array(
//        	['nome' => 'Polar', 'nacionalidade' => 'Brasil', 'created_at' => new DateTime, 'updated_at' => new dateTime],
//        	['nome' => 'Guinness', 'nacionalidade' => 'Irlanda', 'created_at' => new DateTime, 'updated_at' => new dateTime],
//        	['nome' => 'Budweiser', 'nacionalidade' => 'Estados Unidos', 'created_at' => new DateTime, 'updated_at' => new dateTime],
//
//        );
//        DB::table('marca')->insert($marcas);
//        $this->command->info('Cadastrando Marcas!');
    }
}
