<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Creates dummy data for database
     *
     * @return void
     */
    public function run() {
        DB::table('register_user')->insert([
            'name' => 'Abdul',
            'email' => "abdulisallah@gmail.com",
            'password' => Hash::make('12345678')
        ]);
    }
}
