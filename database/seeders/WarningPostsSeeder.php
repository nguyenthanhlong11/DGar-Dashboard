<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarningPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("warning_posts")->insert(
            [
                'user_id' => '2',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'low',
                'image' => 'https://cdn.pixabay.com/photo/2021/04/14/07/03/newborn-6177485_960_720.jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'no clean',
            ],
            [
                'user_id' => '2',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'low',
                'image' => 'https://cdn.pixabay.com/photo/2020/06/20/11/08/cat-5320568_1280.jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'no clean',
            ]
        );

    }
}
