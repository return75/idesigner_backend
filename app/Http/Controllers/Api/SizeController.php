<?php

namespace App\Http\Controllers\Api;

use App\Models\Size;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{

    public function index()
    {
        $sizes = Size::all();

        return response()->json($sizes);
    }
}
