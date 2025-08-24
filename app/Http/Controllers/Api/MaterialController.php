<?php

namespace App\Http\Controllers\Api;

use App\Models\Material;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{

    public function index()
    {
        $materials = Material::all();

        return response()->json($materials);
    }
}
