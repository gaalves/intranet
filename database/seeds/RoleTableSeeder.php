<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'Admin'         
                     
        ]);
        DB::table('roles')->insert([
            'name' => 'Diretor'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Analista'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Coordenador'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Gerente'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Auxiliar'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Assistente'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Consultor'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Representante'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Secretária'         
                     
 		]);
 		DB::table('roles')->insert([
            'name' => 'Farmaceutico'         
                     
 		]);
        DB::table('roles')->insert([
            'name' => 'Usuário'         
                     
        ]);

 		

    }
}
