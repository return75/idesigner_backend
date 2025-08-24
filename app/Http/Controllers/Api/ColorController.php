<?php

namespace App\Http\Controllers\Api;

use App\Models\Color;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{

    public function index()
    {
        $color = Color::get();

        return response()->json($color);
    }
}
