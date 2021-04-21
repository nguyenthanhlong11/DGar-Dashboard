<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SharingPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sharing_posts")->insert(
            [
                'user_id' => 1,
                'address' => '99 To Hien Thanh, Da Nang',
                'content' => 'Joining hands for a green, clean and beautiful environment',
                'image' => 'https://cdn.pixabay.com/photo/2021/04/14/07/03/newborn-6177485_960_720.jpg',
            ]);
        DB::table("sharing_posts")->insert(
            [
                'user_id' => 1,
                'address' => '99 To Hien Thanh, Da Nang',
                'content' => 'Joining hands for a green, clean and beautiful environment',
                'image' => '    ',
            ]);
    }
}
