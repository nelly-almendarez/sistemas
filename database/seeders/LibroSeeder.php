<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	DB::table('libro')->insert([
    		'nombre'=> 'estructta de datos',
    		'autor'=> 'luis',

    	]);
    	DB::table('libro')->insert([
    		'nombre'=> 'programacion',
    		'autor'=> 'luis',

    	]);
    	
    }
}
