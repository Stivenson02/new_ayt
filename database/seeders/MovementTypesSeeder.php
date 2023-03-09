<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movement_types')->insert([
            'friendly_name' => "Entrada",
            'accounting_name'=>"Ingreso"
        ]);

        DB::table('movement_types')->insert([
            'friendly_name' => "Salida",
            'accounting_name'=>"Costo"
        ]);

        DB::table('movement_types')->insert([
            'friendly_name' => "Gasto",
            'accounting_name'=>"Egreso"
        ]);

    }
}
