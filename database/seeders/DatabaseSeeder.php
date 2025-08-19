<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alireza',
            'email' => 'atashfaraz8@gmail.com',
        ]);

        DB::table('sizes')->insert([
            ['code' => 'XS', 'name_en' => 'Extra Small', 'name_fa' => 'خیلی کوچک'],
            ['code' => 'S',  'name_en' => 'Small',       'name_fa' => 'کوچک'],
            ['code' => 'M',  'name_en' => 'Medium',      'name_fa' => 'متوسط'],
            ['code' => 'L',  'name_en' => 'Large',       'name_fa' => 'بزرگ'],
            ['code' => 'XL', 'name_en' => 'Extra Large', 'name_fa' => 'خیلی بزرگ'],
        ]);
    }
}
