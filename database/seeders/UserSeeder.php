<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

            ['name' => 'admin', 'email' => 'admin@gmail.com','password' => Hash::make('123456'),'is_admin' => '1',],
            ['name' => 'user1', 'email' => 'user1@gmail.com','password' => Hash::make('123456'),'is_admin' => '2',],
            ['name' => 'user2', 'email' => 'user2@gmail.com','password' => Hash::make('123456'),'is_admin' => '2',],
        ]);
    }
}
