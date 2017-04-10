<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        $this->call(CategoriaSeeder::class);
//        $this->call(ObjetoSeeder::class);

        // popula o banco com as seeds de marca e promoções vinculadas as marcas
        $this->call(MarcaSeeder::class);
    }
}
