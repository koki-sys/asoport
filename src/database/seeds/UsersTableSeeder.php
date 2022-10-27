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
                'class' => '情報システム専攻科システムエンジニア専攻アドバンスコース',
                'email' => 'user1@example.com',
                'password' => Hash::make('password')
            ],
            [
                'id' => 2,
                'name' => '髙橋 幸暉',
                'class' => '情報工学科',
                'email' => 'user2@example.com',
                'password' => Hash::make('password')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
