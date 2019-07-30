<?php

use Illuminate\Database\Seeder;

class JugadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('jugador')->insert([
        	'nombres' => 'Jose',
        	'apellidos' => 'Taylor',
        	'rut' => '83283728372372',
        	'edad' => 17,
        	'genero' => 'Masculino',
        	'posicion' => 'Center Fields',
        	'num_camiseta' => '12',
        	'id_equipo' => 1
        ]);

        \DB::table('jugador')->insert([
        	'nombres' => 'Carmen',
        	'apellidos' => 'Truman',
        	'rut' => '83283728372372',
        	'edad' => 17,
        	'genero' => 'Femenino',
        	'posicion' => 'Center Fields',
        	'num_camiseta' => '15',
        	'id_equipo' => 2
        ]);
    }
}
