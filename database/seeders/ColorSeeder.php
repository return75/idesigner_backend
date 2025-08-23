<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{

    public function run(): void
    {
        Color::create(['code' => '#fff', 'name_en' => 'white', 'name_fa' => 'سفید']);
        Color::create(['code' => '#000',  'name_en' => 'black', 'name_fa' => 'سیاه']);
        Color::create(['code' => '#fc0303',  'name_en' => 'red', 'name_fa' => 'قرمز']);
        Color::create(['code' => '#0367fc',  'name_en' => 'blue', 'name_fa' => 'آبی']);
        Color::create(['code' => '#03cafc', 'name_en' => 'sky_blue', 'name_fa' => 'آبی آسمانی']);
        Color::create(['code' => '#f0fc03', 'name_en' => '', 'name_fa' => 'زرد']);
        Color::create(['code' => '#03fcb1', 'name_en' => 'green', 'name_fa' => 'سبز']);
        Color::create(['code' => '#9803fc', 'name_en' => 'purple', 'name_fa' => 'بنفش']);
        Color::create(['code' => '#fcb503', 'name_en' => 'orange', 'name_fa' => 'نارنجی']);
    }
}
