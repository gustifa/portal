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
                'heading' => 'heading',
                'text' => 'text',
                'job_title' => 'job_title',
                'job_category' => 'job_category',
                'job_location' => 'job_location',
                'search' => 'Search',
                'background' => 'background',
                'created_at' => Carbon::now(),
            ],
        

        ]);
    }
}
