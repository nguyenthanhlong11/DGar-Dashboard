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
        DB::table("bin_locations")->insert(
            ['name'=>'An Thuong 40 street',
            'latitude'=> '16.0501',
            'longitude'=> '108.2438']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'University of Economics - The University of Danang',
            'latitude'=> '16.04694956',
            'longitude'=> '108.23929']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Hoang Ke Viem street',
            'latitude'=> '16.0488',
            'longitude'=> '108.2434']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'A Bin Sea Food',
            'latitude'=> '16.0484',
            'longitude'=> '108.2432']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Tran Thi Ly Bridge',
            'latitude'=> '16.0503',
            'longitude'=> '108.2294']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Bin',
            'latitude'=> '16.060971',
            'longitude'=> '108.241754']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Dragon Bridge',
            'latitude'=> '16.06145',
            'longitude'=> '108.231388']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Han River Bridge',
            'latitude'=> '16.07238',
            'longitude'=> '108.22892']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Pham Viet Chanh Street',
            'latitude'=> '16.015367',
            'longitude'=> '108.196236']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'DA NANG Vocational College',
            'latitude'=> '16.0599',
            'longitude'=> '108.2438']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Landfills 1',
            'latitude'=> '16.061394',
            'longitude'=> '108.240503']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Landfills 2',
            'latitude'=> '16.059099',
            'longitude'=> '108.2426']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'Hoang Hoa Tham High School',
            'latitude'=> '16.058043',
            'longitude'=> '108.2372']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'My Khe Beach',
            'latitude'=> '16.063981',
            'longitude'=> '108.246385']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'150 To Hien Thanh',
            'latitude'=> '16.059548',
            'longitude'=> '108.24328']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'51 Ha Thi Than',
            'latitude'=> '16.059328',
            'longitude'=> '108.24165']
        );
        DB::table("bin_locations")->insert(
            ['name'=>'30 Hung Vuong',
            'latitude'=> '16.059365',
            'longitude'=> '108.24487']
        );
    }
}
