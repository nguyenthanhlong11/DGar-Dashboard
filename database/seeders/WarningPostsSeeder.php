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
            'account_id'=>'2',
            'address'=>'99 To Hien Thanh, Da Nang',
            'level'=>'low',
            'image'=>'null',
            'description'=>'Joining hands for a green, clean and beautiful environment',
            'status'=>'no clean'
            ],
            [
            'account_id'=>'2',
            'address'=>'99 To Hien Thanh, Da Nang',
            'level'=>'low',
            'image'=>'null',
            'description'=>'Joining hands for a green, clean and beautiful environment',
            'status'=>'no clean'
            ]
        );
            
    }
}
