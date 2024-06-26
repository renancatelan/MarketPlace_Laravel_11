<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Renan Catelan',
                'username' => 'admin',
                'email' => 'admin@rhsc.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Vendedor',
                'username' => 'vendor',
                'email' => 'vendedor@rhsc.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'cliente user',
                'username' => 'cliente',
                'email' => 'cliente@rhsc.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
