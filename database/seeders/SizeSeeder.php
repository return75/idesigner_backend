<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create(['code' => 'XS', 'name_en' => 'Extra Small', 'name_fa' => 'خیلی کوچک']);
        Size::create(['code' => 'S',  'name_en' => 'Small',       'name_fa' => 'کوچک']);
        Size::create(['code' => 'M',  'name_en' => 'Medium',      'name_fa' => 'مدیوم']);
        Size::create(['code' => 'L',  'name_en' => 'Large',       'name_fa' => 'لارج']);
        Size::create(['code' => 'XL', 'name_en' => 'Extra Large', 'name_fa' => 'ایکس لارج']);
    }
}
