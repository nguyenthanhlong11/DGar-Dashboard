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
<<<<<<< HEAD
                'name'=>'Mian Mai',
                'address'=>'101b Le Huu Trac, Da Nang',
                'image'=>'null',
=======
>>>>>>> 2b38e9645fead5f5dfd94f95c6760211c9768232
                'role'=>'user'
            ]);
            DB::table("users")->insert(
            [
                'email'=>'miancloud@gmail.com',
                'password'=>bcrypt("admin123"),
<<<<<<< HEAD
                'name'=>'Mian Mai',
                'address'=>'101b Le Huu Trac, Da Nang',
                'image'=>'null',
=======
>>>>>>> 2b38e9645fead5f5dfd94f95c6760211c9768232
                'role'=>'admin'
            ],
        );  
    }
}
