<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'phone' => '050000000',
            'logo' => 'assets/front/icons/navbar/logo.jpg',
            'copyright' => 'All rights reserved'
        ]);
    }
}
