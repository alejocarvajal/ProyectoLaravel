<?php

use Illuminate\Database\Seeder;

class SeedCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categorias')->delete();
        DB::table('Categorias')->insert(
            [
                ['name'=>'Aventura'],
                ['name'=>'Terror'],
                ['name'=>'Suspenso'],
                ['name'=>'Accion'],
                ['name'=>'Infantil']
            ]
        );
    }
}
