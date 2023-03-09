<?php

namespace Database\Seeders;

use App\Models\Services\MovementType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movement_names')->insert([
            'name' => "movement 1-1",
            'movement_type_id'=>MovementType::find(1)->id
        ]);
        DB::table('movement_names')->insert([
            'name' => "movement 1-2",
            'movement_type_id'=>MovementType::find(1)->id
        ]);

        DB::table('movement_names')->insert([
            'name' => "movement 2-1",
            'movement_type_id'=>MovementType::find(2)->id
        ]);
        DB::table('movement_names')->insert([
            'name' => "movement 2-2",
            'movement_type_id'=>MovementType::find(2)->id
        ]);

        DB::table('movement_names')->insert([
            'name' => "movement 3-1",
            'movement_type_id'=>MovementType::find(3)->id
        ]);
        DB::table('movement_names')->insert([
            'name' => "movement 3-2",
            'movement_type_id'=>MovementType::find(3)->id
        ]);

    }
}
