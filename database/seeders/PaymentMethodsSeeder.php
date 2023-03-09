<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            'name' => "Efectivo",
            'status'=> 'active'
        ]);
        DB::table('payment_methods')->insert([
            'name' => "Daviplata",
            'status'=> 'active'
        ]);
        DB::table('payment_methods')->insert([
            'name' => "Nequi",
            'status'=> 'active'
        ]);
        DB::table('payment_methods')->insert([
            'name' => "Bancolombia",
            'status'=> 'active'
        ]);

    }
}
