<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=>'long@gmail.com',
            'password' => Hash::make('123'),
            'email_verified_at'=>'2021-03-31 19:35:42',
            'loginStatus'=>'long cho dien',
            'remember_token'=>'hihihi',
        ]);
    }
}
