<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create(['name_en' => 'cotton', 'name_fa' => 'پنبه']);
        Material::create(['name_en' => 'cotton_polyester', 'name_fa' => 'پنبه و پلی استر']);
        Material::create(['name_en' => 'polyester', 'name_fa' => 'پلی استر']);
        Material::create(['name_en' => 'viscose_rayon', 'name_fa' => 'ویسکوز-ریون']);
        Material::create(['name_en' => 'elastane_spandex', 'name_fa' => 'کشسان']);
    }
}
