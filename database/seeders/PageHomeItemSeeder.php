<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Carbon\Carbon;

class PageHomeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('page_home_item')->insert([
            //admin
            [
                'heading' => 'Tracking Lulusan SMK',
                'text' => 'Tracking Lulusan SMK',
                'job_title' => 'Job Title',
                'job_category' => 'Job Category',
                'job_location' => 'Job Location',
                'search' => 'Search',
                'background' => 'banner_home.jpg',
                'created_at' => Carbon::now(),
            ],
        

        ]);
    }
}
