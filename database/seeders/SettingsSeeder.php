<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'phone' => '0500000',
            'logo' => 'assets/front/icons/navbar/logo.jpg',
            'copyright' => 'All rights reserved',
        ]);
    }
}
