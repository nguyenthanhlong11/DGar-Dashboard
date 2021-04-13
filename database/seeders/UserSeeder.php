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
                'username'=>'user1',
                'password'=>bcrypt("user123"),
                'name'=>'Mian Mai',
                'address'=>'101b Le Huu Trac, Da Nang',
                'image'=>'null',
                'role'=>'user'
            ]);
            DB::table("users")->insert(
            [
                'email'=>'miancloud@gmail.com',
                'username'=>'user2',
                'password'=>bcrypt("admin123"),
                'name'=>'Mian Mai',
                'address'=>'101b Le Huu Trac, Da Nang',
                'image'=>'null',
                'role'=>'admin'
            ]); 
            DB::table("users")->insert(
                [
                    'email'=>'user@gmail.com',
                    'username'=>'user3',
                    'password'=>bcrypt("user123"),
                    'name'=>'Mian Mai',
                    'address'=>'101b Le Huu Trac, Da Nang',
                    'image'=>'null',
                    'role'=>'user'
                ]);
    }
}
