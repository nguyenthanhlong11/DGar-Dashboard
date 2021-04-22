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
            'type_name' => 'News',
            'content' => 'An environmental information has been sent to you. Please see and share with us  ',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'Event',
            'content' => 'This week, we will send you a special event about protecting the environment. Please join us  ',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'Community',
            'content' => 'has shared with you a beautiful act on the environment. Join us together for a zero waste environment  ',
            'image' => 'null',
        ]);
        DB::table("notify_types")->insert([
            'type_name' => 'Clear trash',
            'content' => 'has helped to reduce the amount of waste in the environment. Thank you so much.  ',
            'image' => 'null',
        ]);
    }
}
