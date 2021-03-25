<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(
            [
                'email'=>'mian@gmail.com',
                'password'=>bcrypt("user123"),
                'role'=>'user'
            ]);
            DB::table("users")->insert(
            [
                'email'=>'miancloud@gmail.com',
                'password'=>bcrypt("admin123"),
                'role'=>'admin'
            ],
        );  
    }
}
