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
            ['name' => "Java"],
            ['name' => "Ruby"],
            ['name' => "Go"],
            ['name' => "TypeScript"],
            ['name' => "Kotlin"],
            ['name' => "Python"],
            ['name' => "Swift"],
            ['name' => "React"],
            ['name' => "Laravel"],
            ['name' => "Vue"],
            ['name' => "jQuery"],
            ['name' => "Django"]
        ];
        DB::table("languages")->insert($data);
    }
}
