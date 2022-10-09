<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "HTML"],
            ["name" => "CSS"],
            ["name" => "JavaScript"],
            ["name" => "PHP"],
            ["name" => "Java"],
            ["name" => "Ruby"],
            ["name" => "Node.js"],
            ["name" => "Go"],
            ["name" => "TypeScript"],
            ["name" => "Kotlin"],
            ["name" => "Python"],
            ["name" => "Swift"],
            ["name" => "React"],
            ["name" => "Next.js"],
            ["name" => "Nuxt.js"],
            ["name" => "Laravel"],
            ["name" => "Vue"],
            ["name" => "jQuery"],
            ["name" => "Django"],
            ["name" => "Flask"],
            ["name" => "Express"],
            ["name" => "Git"],
            ["name" => "Github"],
            ["name" => "AWS"],
            ["name" => "GCP"],
            ["name" => "Azure"],
            ["name" => "Monaca"],
            ["name" => "ロリポップ！マネージドクラウド"],
        ];
        DB::table("languages")->insert($data);
    }
}
