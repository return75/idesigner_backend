<?php

namespace App\Http\Controllers\Api;

use App\Models\TShirt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TshirtVariantController extends Controller
{
    public function show($id)
    {

    }

    public function store(Request $request, Tshirt $tshirt)
    {

        $validated = $request->validate([
            'color_id'    => 'required|integer|exists:colors,id',
            'material_id' => 'required|integer|exists:materials,id',
            'size_id'     => 'required|integer|exists:sizes,id',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('tshirt_variants', 'public');
        }

        $variant = $tshirt->variants()->create([
            'color_id'    => $validated['color_id'],
            'material_id' => $validated['material_id'],
            'size_id'     => $validated['size_id'],
            'image'       => $path,
        ]);

        return response()->json([
            'message' => 'Variant created successfully',
            'data'    => $variant
        ], 201);
    }
}
