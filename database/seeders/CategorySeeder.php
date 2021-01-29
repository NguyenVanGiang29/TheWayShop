<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Categoris')->insert([
            ['name_cate' => 'Quần'],
            ['name_cate' => 'Áo'],
            ['name_cate' => 'Đồng hồ'],
            ['name_cate' => 'Giày'],
        ]);
    }
}
