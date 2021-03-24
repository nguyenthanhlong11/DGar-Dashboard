<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AccountInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("account_info")->insert(
        [
            'account_id'=>1,
            'name'=>'Mian Mai',
            'address'=>'101b Le Huu Trac, Da Nang',
            'image'=>'null',
        ],
    );
            
    }
}
