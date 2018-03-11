<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
        	'title' => 'Corporativo',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'SPLog - Aureliano Cardia',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'SPLog - Gera Arte',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Medicar',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'MGLog',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Vazmed',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Mundimed',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Baby Senior',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'RResol',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'MNC',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Uriah',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Canedo - Senador Canedo',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Canedo - Cariacica',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Dimevi',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Vazmed - GO',        	
        ]);
        DB::table('companies')->insert([
        	'title' => 'Mundimed - GO',        	
        ]);


        

    }
}
