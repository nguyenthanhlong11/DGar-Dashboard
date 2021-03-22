<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_reports')->insert([
            'image'=>'abc.png',
            'location'=>'Da Nang',
            'status' => 'hihi',
            'severity'=>'hahaha',
            'contributorId'=>1,
            'created_at'=>'2021-09-12 19:35:42',
            'updated_at'=>'2021-09-15 19:35:42'
        ]); 
    }
}
