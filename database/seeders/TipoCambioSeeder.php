<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCambioSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_cambios')->insert([
            'tc_venta' => 3.45,
            'tc_compra' => 3.85,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('tipo_cambios')->insert([
            'tc_venta' => 3.60,
            'tc_compra' => 3.75,    
            'created_at' => date('Y-m-d H:i:s'),       
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('tipo_cambios')->insert([
            'tc_venta' => 3.75,
            'tc_compra' => 3.80,           
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('tipo_cambios')->insert([
            'tc_venta' => 3.95,
            'tc_compra' => 3.90,           
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
