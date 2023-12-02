<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('Users')->insert(
            [
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('12345678'),
                    'typeuser' => 'admin'
                ],
                [
                    'name' => 'khang',
                    'email' => 'khang@gmail.com',
                    'password' => bcrypt('12345678'),
                    'typeuser' => 'user'
                ]

            ]
        );
    }
}
