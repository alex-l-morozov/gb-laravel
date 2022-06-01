<?php

namespace Database\Seeders;

use DB;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();
        for($i=0; $i<100; $i++) {
            $title = $faker->jobTitle();
            $data[] = [
                'category_id' => rand(1,10),
                'title' => $title,
                'slug' => \Str::slug($title),
                'author' => $faker->userName(),
                'description' => $faker->text(100),
                'image' => $faker->imageUrl(),
            ];
        }

        return $data;
    }
}
