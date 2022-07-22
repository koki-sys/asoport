<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
                'class' => '情報システム専攻科',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'ポートフォリオサイトを作りました。 ご覧いただけますと幸いです。',
                'use_language' => 'PHP',
                'img_url' => Str::random(20)
            ],
            [
                'user_id' => 1,
                'port_url' => Str::random(10) . '/example.com',
                'class' => '情報システム専攻科',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'ご覧いただけますと幸いです。',
                'use_language' => 'JavaScript,HTML,CSS',
                'img_url' => Str::random(20)
            ],
            [
                'user_id' => 2,
                'port_url' => Str::random(10) . '/example.com',
                'class' => '情報工学科',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'ポートフォリオサイトを作りました。',
                'use_language' => 'JavaScript,PHP,HTML',
                'img_url' => Str::random(20)
            ],
            [
                'user_id' => 2,
                'port_url' => Str::random(10) . '/example.com',
                'class' => '情報工学科',
                'git_url' => Str::random(10) . '/github.com',
                'comment' => 'こんにちは',
                'use_language' => 'PHP,HTML',
                'img_url' => Str::random(20)
            ],
        ];
        DB::table('posts')->insert($data);
    }
}
