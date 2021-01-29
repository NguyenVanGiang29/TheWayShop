<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Carts')->insert([
            ['user_id' => '2', 'prd_id' => '1', 'quality' => '2', 'status' => '0'],
            ['user_id' => '2', 'prd_id' => '2', 'quality' => '3', 'status' => '0'],
            ['user_id' => '3', 'prd_id' => '3', 'quality' => '4', 'status' => '1'],
        ]);
    }
}
