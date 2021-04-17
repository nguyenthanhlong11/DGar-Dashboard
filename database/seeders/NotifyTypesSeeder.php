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
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'event',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'community',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'clear_trash',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'bonus_point',
            'image' => 'null',
        ]);
    }
}
