<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            Post::create([
                'user_id'=>$i+1,
                'category_id'=>$i+1,
                'title'=> $faker->name,
                'content'=>$faker->text,
                'thumbnail_path'=>$faker->url
            ]);
        }

    }
}
