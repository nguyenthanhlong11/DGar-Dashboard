<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("accounts")->insert(
        [
            'email'=>'mian@gmail.com',
            'password'=>bcrypt("user123"),
            'role'=>'user'
        ]);
        DB::table("accounts")->insert(
        [
            'email'=>'miancloud@gmail.com',
            'password'=>bcrypt("admin123"),
            'role'=>'admin'
        ],
    );         
                    
    }
}
