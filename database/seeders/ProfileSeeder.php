<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'fullName'=>'Thanh Long',
            'avatar'=>'long.png',
            'city'=>'Quang Nam',
            'userId'=>1
        ]);
    }
}
