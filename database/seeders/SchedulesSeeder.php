<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("schedules")->insert([
            'user_id' => 1,
            'post_id' => 1,
            'start_day' => '23/02/2021',
            'end_day' => '25/03/2021',
            'note' => 'null',
        ]);
    }
}
