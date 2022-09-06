<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Ramsey\Uuid\v4;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        for($i = 0; $i < 500; $i++){
            DB::table("posts")->insert([
                'category_id' => random_int(1, 6),
                'title' => Str::random(10),
                'description' => Str::random(50),
                'text' => Str::random(1000),
                'article' => v4(),
            ]);
        }
    }
}
