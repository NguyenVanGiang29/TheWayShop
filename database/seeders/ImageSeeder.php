<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Images')->insert([
            ['path' => '1-1.png', 'prd_id' => '1'],
            ['path' => '1-2.png', 'prd_id' => '2'],
            ['path' => '1-3.png', 'prd_id' => '3'],
            ['path' => '2-1.png', 'prd_id' => '4'],
            ['path' => '2-2.png', 'prd_id' => '5'],
            ['path' => '3-1.png', 'prd_id' => '6'],
            ['path' => '3-2.png', 'prd_id' => '7'],
            ['path' => '4-1.png', 'prd_id' => '8'],
            ['path' => '4-2.png', 'prd_id' => '9'],
            ['path' => '4-3.png', 'prd_id' => '10'],
            ['path' => '4-4.png', 'prd_id' => '11'],
        ]);
    }
}
