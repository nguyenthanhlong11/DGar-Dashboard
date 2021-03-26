<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // $this->call(UserInformationSeeder::class);
        $this->call(SharingPostsSeeder::class);
        $this->call(WarningPostsSeeder::class);
        $this->call(NotifyTypesSeeder::class);
        $this->call(SchedulesSeeder::class);
        $this->call(NotificationsSeeder::class);
    }
}
