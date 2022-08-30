<?php

namespace Database\Seeders;

use App\Models\Product\Measure;
use App\Models\Product\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measures')->insert([
            'slug'=>slug_token('1_32_pintura_null'),
             'clasificate_measure' => "S",
             'type_measure' => "Pintura",
             'measure_name' => "1/32",
             'measure' => "1",
             'equivalent_measure' => null,
             'equivalent_measure_id' => null,
             'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('1_16_pintura_1_32'),
            'clasificate_measure' => "S",
            'type_measure' => "Pintura",
            'measure_name' => "1/16",
            'measure' => "1",
            'equivalent_measure' => '2',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('1_8_pintura_1_16'),
            'clasificate_measure' => "S",
            'type_measure' => "Pintura",
            'measure_name' => "1/8",
            'measure' => "1",
            'equivalent_measure' => '2',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('1_4_pintura_1_8'),
            'clasificate_measure' => "S",
            'type_measure' => "Pintura",
            'measure_name' => "1/4",
            'measure' => "1",
            'equivalent_measure' => '2',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('1_2_pintura_1_4'),
            'clasificate_measure' => "S",
            'type_measure' => "Pintura",
            'measure_name' => "1/2",
            'measure' => "1",
            'equivalent_measure' => '2',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('galon_pintura_1_2'),
            'clasificate_measure' => "M",
            'type_measure' => "Pintura",
            'measure_name' => "Galon",
            'measure' => "1",
            'equivalent_measure' => '2',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);
        DB::table('measures')->insert([
            'slug'=>slug_token('media_caneca_pintura_galon'),
            'clasificate_measure' => "M",
            'type_measure' => "Pintura",
            'measure_name' => "Media Caneca",
            'measure' => "1",
            'equivalent_measure' => '2.5',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('caneca_pintura_media_caneca'),
            'clasificate_measure' => "L",
            'type_measure' => "Pintura",
            'measure_name' => "Caneca",
            'measure' => "1",
            'equivalent_measure' => '2',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

        DB::table('measures')->insert([
            'slug'=>slug_token('tambor_pintura_10_canecas'),
            'clasificate_measure' => "XL",
            'type_measure' => "Pintura",
            'measure_name' => "Tambor de 10",
            'measure' => "1",
            'equivalent_measure' => '10',
            'equivalent_measure_id' => DB::getPdo()->lastInsertId(),
            'product_type_id' => ProductType::firstWhere('name', 'Pintura')->id
        ]);

    }
}
