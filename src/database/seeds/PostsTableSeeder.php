<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
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
                'user_id' => 1,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'ポートフォリオサイトを作りました。 ご覧いただけますと幸いです。',
                'use_language' => 'PHP',
                'img_url' => 'img/200x200.png',
                'public_flg' => 1
            ],
            [
                'user_id' => 1,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'ご覧いただけますと幸いです。',
                'use_language' => 'JavaScript / HTML / CSS',
                'img_url' => 'img/500x750.png',
                'public_flg' => 1
            ],
            [
                'user_id' => 1,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'こんにちは',
                'use_language' => 'React / JavaScript / PHP / HTML',
                'img_url' => 'img/1500x1000.png',
                'public_flg' => 0
            ],
            [
                'user_id' => 1,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'チームで開発しました。',
                'use_language' => 'PHP / HTML / Laravel',
                'img_url' => 'img/1980x1440.png',
                'public_flg' => 0
            ],
            [
                'user_id' => 2,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'ポートフォリオサイトを作りました。',
                'use_language' => 'JavaScript / PHP / HTML',
                'img_url' => 'img/1500x1000.png',
                'public_flg' => 1
            ],
            [
                'user_id' => 2,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'こんにちは',
                'use_language' => 'PHP / HTML',
                'img_url' => 'img/1980x1440.png',
                'public_flg' => 1
            ],
            [
                'user_id' => 2,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'こんにちは',
                'use_language' => 'React / JavaScript / PHP / HTML',
                'img_url' => 'img/1500x1000.png',
                'public_flg' => 0
            ],
            [
                'user_id' => 2,
                'port_url' => Str::random(10) . '/example.com',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'チームで開発しました。',
                'use_language' => 'PHP / HTML / Laravel',
                'img_url' => 'img/1980x1440.png',
                'public_flg' => 0
            ],
        ];
        DB::table('posts')->insert($data);
    }
}
