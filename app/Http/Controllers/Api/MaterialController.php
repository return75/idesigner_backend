<?php

namespace App\Http\Controllers\Api;

use App\Models\Material;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{

    public function index()
    {
        $material = Material::get();

        return response()->json($material);
    }
}
