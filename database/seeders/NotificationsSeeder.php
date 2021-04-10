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
            'user_id'=>1,
            'notify_type_id'=>1,
            'content'=>'That is good day, you can make the pink life',
            'note'=>'null',
            ]);

            DB::table("notifications")->insert([
            'user_id'=>1,
            'notify_type_id'=>2,
            'content'=>'That is amazing',
            'note'=>'null',
            ]);

            DB::table("notifications")->insert([
            'user_id'=>1,
            'notify_type_id'=>3,
            'content'=>'Good job, unbelievable',
            'note'=>'null',
            ]);
            
            DB::table("notifications")->insert([
            'user_id'=>1,
            'notify_type_id'=>4,
            'content'=>'The area you propose has been cleaned up, please continue to join hands for a green - clean - beautiful environment',
            'note'=>'null',
            ]);

            DB::table("notifications")->insert([
            'user_id'=>1,
            'notify_type_id'=>5,
            'content'=>'You have cleaned up the rubbish area. Thank you for joining us in protecting the environment. You have earned +2 in cumulative points',
            'note'=>'null',
            ]);

            DB::table("notifications")->insert([
            'user_id'=>1,
            'notify_type_id'=>5,
            'content'=>'Nguyen Thanh Long added a new image. Lets join in to share the joy and protect the environment with friends',
            'note'=>'null',
            ]);
    
           
    }
}
