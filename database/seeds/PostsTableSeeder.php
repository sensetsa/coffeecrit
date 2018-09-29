<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 0; $x < 50; $x++)
        {
            DB::table('posts')->insert([
                'title' => str_random(10),
                'body' => str_random(10),
                'user_id' => 2,
                'category_id' => 2,
            ]);
        }
    }
}
