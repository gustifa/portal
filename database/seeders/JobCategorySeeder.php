<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_category')->insert([
            //admin
            [
                'name' => 'Accounting',
                'icon' => 'fas fa-landmark',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Engineering',
                'icon' => 'fas fa-magic',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Technician',
                'icon' => 'fas fa-street-view',
                'created_at' => Carbon::now(),
            ],
        

        ]);
    }
}
