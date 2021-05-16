<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'email' => 'mian@gmail.com',
                'username' => 'user1',
                'password' => bcrypt("user123"),
                'name' => 'Mian Mai',
                'address' => '101b Le Huu Trac, Da Nang',
                'image' => 'null',
                'role' => 'user',
            ]);
        DB::table("users")->insert(
            [
                'email' => 'miancloud@gmail.com',
                'username' => 'user2',
                'password' => bcrypt("admin123"),
                'name' => 'Mian Mai',
                'address' => '101b Le Huu Trac, Da Nang',
                'image' => 'null',
                'role' => 'admin',
            ]);
        DB::table("users")->insert(
            [
                'email' => 'user@gmail.com',
                'username' => 'user3',
                'password' => bcrypt("user123"),
                'name' => 'Mian Mai',
                'address' => '101b Le Huu Trac, Da Nang',
                'image' => 'null',
                'role' => 'user',
            ]);
        DB::table("users")->insert(
            [
                'email' => 'long@gmail.com',
                'username' => 'user4',
                'password' => bcrypt("user123"),
                'name' => 'Thanh Long',
                'address' => '101b Le Huu Trac, Da Nang',
                'image' => 'long.png',
                'role' => 'user',
            ]);
            DB::table("users")->insert(
                [
                    'email' => 'thanhlong@gmail.com',
                    'username' => 'thanhlong',
                    'password' => bcrypt("thanhlong"),
                    'name' => 'Thanh Long',
                    'address' => '101b Le Huu Trac, Da Nang',
                    'image' => 'long.png',
                    'role' => 'user',
                ]);
            DB::table("users")->insert(
                [
                    'email' => 'thanhlong@gmail.com',
                    'username' => 'thanhlong2',
                    'password' => bcrypt("thanhlong2"),
                    'name' => 'Thanh Long',
                    'address' => '101b Le Huu Trac, Da Nang',
                    'image' => 'long.png',
                    'role' => 'admin',
                ]);
    }
}
