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
            'account_id'=>1,
            'type_id'=>3,
            'content'=>'That is good day, you can make the pink life',
            'note'=>'null',
            ]);
            DB::table("notifications")->insert([
            'account_id'=>1,
            'type_id'=>2,
            'content'=>'That is amazing',
            'note'=>'null',
            ]);
            DB::table("notifications")->insert([
            'account_id'=>1,
            'type_id'=>5,
            'content'=>'Good job, unbelievable',
            'note'=>'null',
            ]);
            
    }
}
