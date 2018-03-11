<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            'title' => 'TI'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Financeiro'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Trade Marketing'            

    ]);
    DB::table('departments')->insert([
            'title' => 'RH'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Fiscal Contabil'            

    ]);
    DB::table('departments')->insert([
            'title' => 'ADM Vendas'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Compras'            

    ]);
    DB::table('departments')->insert([
            'title' => 'Diretoria'          

    ]);
    DB::table('departments')->insert([
            'title' => 'Controladoria Patrimonial'          

    ]);
    DB::table('departments')->insert([
            'title' => 'Vendas'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Televendas'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Farmaceutico'           

    ]);
    DB::table('departments')->insert([
            'title' => 'Faturamento'            

    ]);
    DB::table('departments')->insert([
            'title' => 'Expedição de Mercadoria'            

    ]);
    DB::table('departments')->insert([
            'title' => 'Recepção de Mercadoria'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Separação de Mercadoria'            

    ]);
    DB::table('departments')->insert([
            'title' => 'Conferencia de Mercadoria'          

    ]);
    DB::table('departments')->insert([
            'title' => 'Segurança'          

    ]);
    DB::table('departments')->insert([
            'title' => 'Transporte'         

    ]);
    DB::table('departments')->insert([
            'title' => 'Estoque de Mercadoria'          

    ]);
    DB::table('departments')->insert([
            'title' => 'Operação'           

    ]);
    }

    
 }
