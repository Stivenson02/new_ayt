<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Countries
        DB::table('countries')->insert([
            'name' => "Colombia"
        ]);

        //Departments
        DB::table('departments')->insert([
            'country_id' => 1,
            'name' => "Bogotá"
        ]);
        DB::table('departments')->insert([
            'country_id' => 1,
            'name' => "Cundinamarca"
        ]);
        DB::table('departments')->insert([
            'country_id' => 1,
            'name' => "Boyacá"
        ]);

        //Cities
        DB::table('cities')->insert([
            'department_id' => 1,
            'name' => "Bogotá D.C"
        ]);
        DB::table('cities')->insert([
            'department_id' => 2,
            'name' => "Tocancipá"
        ]);
        DB::table('cities')->insert([
            'department_id' => 2,
            'name' => "Chía"
        ]);
        DB::table('cities')->insert([
            'department_id' => 2,
            'name' => "Zipaquirá"
        ]);
        DB::table('cities')->insert([
            'department_id' => 3,
            'name' => "Tunja"
        ]);
    }
}
