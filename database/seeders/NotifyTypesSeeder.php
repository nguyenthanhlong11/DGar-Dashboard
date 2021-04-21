<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotifyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("notify_types")->insert([
            'type_name' => 'news',
            'content' => 'added a new post. ',
            'image' => 'https://cdn.pixabay.com/photo/2015/04/23/21/59/tree-736877_1280.jpg',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'event',
            'content' => 'Have a event. ',
            'image' => 'https://cdn.pixabay.com/photo/2015/03/27/13/16/cat-694730_1280.jpg',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'community',
            'content' => 'Added a new image. ',
            'image' => 'https://cdn.pixabay.com/photo/2015/11/16/14/43/cat-1045782_1280.jpg',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'clear_trash',
            'content' => 'Someone clear trash. ',
            'image' => 'https://cdn.pixabay.com/photo/2016/01/19/17/41/friends-1149841_1280.jpg',
        ]);
    }
}
