<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => '松浦豪毅',
                'email' => Str::random(10) . '@example.com',
                'password' => Hash::make('password')
            ],
            [
                'id' => 2,
                'name' => '髙橋 幸暉',
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
