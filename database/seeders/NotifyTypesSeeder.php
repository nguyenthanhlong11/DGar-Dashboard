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
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'event',
            'content' => 'Have a event. ',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'community',
            'content' => 'Added a new image. ',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'clear_trash',
            'content' => 'Someone clear trash. ',
            'image' => 'null',
        ]);
    }
}
