<?php

use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('equipos')->insert([
        	'nombre' => 'Aguilas',
        	'lema' => 'Arriba Campeones',
            'liga' => 'Football Tackle'
        ]);

        \DB::table('equipos')->insert([
        	'nombre' => 'Depredadoras',
        	'lema' => 'Arrasando con los enemigos',
            'liga' => 'Football Flag'
        ]);
    }
}
