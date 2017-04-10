<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categorias=array(
            ['nome' => 'Cartão Telefonico', 'created_at' => new DateTime, 'updated_at' => new dateTime]
        );
        DB::table('categoria')->insert($categorias);
        $this->command->info('Cadastrando Categorias!');
    }
}
