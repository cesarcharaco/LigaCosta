<?php

use Illuminate\Database\Seeder;

class CoachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('coach')->insert([
        	'nombres' => 'Martin',
        	'apellidos' => 'Brooks',
        	'rut' => '83283728372372',
        	'edad' => 30,
        	'id_equipo' => 1
        ]);

        \DB::table('coach')->insert([
        	'nombres' => 'Milena',
        	'apellidos' => 'Allens',
        	'rut' => '83283728372372',
        	'edad' => 30,
        	'id_equipo' => 2
        ]);
    }
}
