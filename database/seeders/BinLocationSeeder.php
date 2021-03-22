<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BinLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bin_locations')->insert([
            'longitude'=>'15°W',
            'latitude'=>'30°E',
            'status'=>'hahah',
            'severity'=>'hihihi',  
        ]);
    }
}
