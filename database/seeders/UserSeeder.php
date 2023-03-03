<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            //admin
            [
                'name' => 'admin',
                'email' => 'fauzangustifa@gmail.com',
                'password' => Hash::make('111'),
                'photo' => 'admin.jpg',
                'created_at' => Carbon::now(),
            ],
        

        ]);
    }
}
