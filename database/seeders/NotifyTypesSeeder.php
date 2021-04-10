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
            'type_name'=>'news',
            ]);
        DB::table("notify_types")->insert( [
            'type_name'=>'event',
            ]);
        DB::table("notify_types")->insert([
            'type_name'=>'community',
            ]);
        DB::table("notify_types")->insert([
            'type_name'=>'clear_trash',
            ]);
        DB::table("notify_types")->insert([
            'type_name'=>'bonus_point',
            ]);
    }
}
