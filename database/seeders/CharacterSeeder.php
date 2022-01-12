<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
        	[
	        	'name' => 'Rick',
	        	'status' => 'Vivo',
	        	'species' => 'Humano',
	        	'gender' => 'Masculino',
	        	'image' => 'www.imagen.com'
        	],
        	[
	        	'name' => 'Morty',
	        	'status' => 'Vivo',
	        	'species' => 'Alien',
	        	'gender' => 'Masculino',
	        	'image' => 'www.imagen2.com'
        	],
        	[
	        	'name' => 'Bulma',
	        	'status' => 'Vivo',
	        	'species' => 'Alien',
	        	'gender' => 'Femenimo',
	        	'image' => 'www.imagen.com'
        	],
        	[
        		'name' => 'Daniel',
	        	'status' => 'Vivo',
	        	'species' => 'Humano',
	        	'gender' => 'Masculino',
	        	'image' => 'www.imagen7.com'
        	]
        ]);
    }
}
