<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 1,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 2,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 3,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 4,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 4,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 4,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 3,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 2,
            'note' => 'null',
        ]);

        DB::table("notifications")->insert([
            'user_id' => 1,
            'notify_type_id' => 2,
            'note' => 'null',
        ]);

    }
}
