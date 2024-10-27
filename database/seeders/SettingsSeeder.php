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
        //
        DB::table('tbl_settings')->insert([
            'meta_author' => 'INDICAB Packers and Movers',
            'meta_copyright' => 'INDICAB Packers and Movers',
            'meta_reply_to' => 'info@indicabpackersindia.com',
            'meta_expires' => 'never',
            'meta_theme_color' => '#e31e25',
            'meta_handheld_friendly' => true,
            'meta_apple_web_app_capable' => true,
            'meta_apple_status_bar_style' => '#e31e25',
            'meta_googlebot' => 'index, follow',
            'meta_allow_search' => 'yes',
            'meta_revisit_after' => 'weekly',
            'meta_distribution' => 'global',
            'meta_coverage' => 'Worldwide',
            'meta_robots' => 'index, follow',
        ]);
    }
}
