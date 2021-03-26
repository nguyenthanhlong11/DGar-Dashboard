<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user_information")->insert(
            [
                'user_id'=>1,
                'name'=>'Mian Mai',
                'address'=>'101b Le Huu Trac, Da Nang',
                'image'=>'null',
            ],
        );
             
    }
}
