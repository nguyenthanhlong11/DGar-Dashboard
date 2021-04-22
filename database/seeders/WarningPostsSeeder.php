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
                'image' => 'https://media-cdn.laodong.vn/Storage/NewsPortal/2018/9/28/633373/9-1_Opt.jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'no clean',
            ],
            [
                'user_id' => '1',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'low',
                'image' => 'https://congnghiepmoitruong.vn/stores/news_dataimages/buinga/082020/04/10/in_article/3702_image001.jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'no clean',
            ],
            [
                'user_id' => '3',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'height',
                'image' => 'https://anphatholdings.com/wp-content/uploads/2020/03/tac-hai-cua-rac-thai-nhua-den-cuoc-song.jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'Cleaned',
            ],
            [
                'user_id' => '4',
                'address' => '99 To Hien Thanh, Da Nang',
                'level' => 'height',
                'image' => 'https://f.thuongtruong.com.vn/IMAGES/2019/06/201906051116SArac.jpg',
                'description' => 'Joining hands for a green, clean and beautiful environment',
                'status' => 'Cleaned',
            ]
        );

    }
}
