<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tshirt;
use App\Models\TShirtVariant;

class TshirtSeeder extends Seeder
{
    public function run()
    {
        $tshirts = [
            'Classic Tee',
            'V-Neck Tee',
            'Polo Shirt',
            'Long Sleeve Tee',
        ];

        foreach ($tshirts as $name) {
            $tshirt = Tshirt::create([
                'name' => $name
            ]);

            $colors = [1, 2, 5, 6, 9];
            $materials = [1, 3, 4, 5];
            $sizes = [1, 2, 3];

            foreach ($colors as $color_id) {
                foreach ($materials as $material_id) {
                    foreach ($sizes as $size_id) {
                        TShirtVariant::create([
                            'tshirt_id' => $tshirt->id,
                            'color_id' => $color_id,
                            'material_id' => $material_id,
                            'size_id' => $size_id,
                            'image' => null
                        ]);
                    }
                }
            }
        }
    }
}
