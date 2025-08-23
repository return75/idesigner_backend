<?php

namespace App\Http\Controllers\Api;

use App\Models\TShirt;
use App\Http\Controllers\Controller;

class TShirtController extends Controller
{
    public function show($id)
    {
        $tshirt = TShirt::with([
            'variants.color',
            'variants.material',
            'variants.size'
        ])->findOrFail($id);

        return response()->json($tshirt);
    }
}
