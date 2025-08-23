<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Alireza',
            'last_name' => 'Atashfaraz',
            'email' => 'atashfaraz8@gmail.com',
            'password' => Hash::make('Whereishe1'),
            'is_admin' => true,
        ]);
        $this->call([
            SizeSeeder::class,
        ]);
        $this->call([
            MaterialSeeder::class,
        ]);
        $this->call([
            ColorSeeder::class,
        ]);
    }
}
