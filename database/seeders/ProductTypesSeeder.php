<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'name' => "Pintura",
            'slug'=>slug_token('lukran_option_pintura')
        ]);

        DB::table('product_types')->insert([
            'name' => "Cinta",
            'slug'=>slug_token('lukran_option_cinta')
        ]);

        DB::table('product_types')->insert([
            'name' => "Rodillo",
            'slug'=>slug_token('lukran_option_cinta')
        ]);

        DB::table('product_types')->insert([
            'name' => "Brocha",
            'slug'=>slug_token('lukran_option_cinta')
        ]);

        DB::table('product_types')->insert([
            'name' => "Cemento",
            'slug'=>slug_token('lukran_option_cinta')
        ]);


    }
}
