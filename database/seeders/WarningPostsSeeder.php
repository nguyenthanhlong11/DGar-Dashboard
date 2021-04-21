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
                'image' => 'https://images.pexels.com/photos/4107120/pexels-photo-4107120.jpeg?cs=srgb&dl=pexels-cottonbro-4107120.jpg&fm=jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'no clean',
            ],
            [
                'user_id' => '1',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'low',
                'image' => 'https://images.pexels.com/photos/4108715/pexels-photo-4108715.jpeg?cs=srgb&dl=pexels-cottonbro-4108715.jpg&fm=jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'no clean',
            ],
            [
                'user_id' => '3',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'height',
                'image' => 'https://images.pexels.com/photos/4239091/pexels-photo-4239091.jpeg?cs=srgb&dl=pexels-karolina-grabowska-4239091.jpg&fm=jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'Cleaned',
            ],
            [
                'user_id' => '4',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'height',
                'image' => 'https://images.pexels.com/photos/4239031/pexels-photo-4239031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'Cleaned',
            ]
        );

    }
}
