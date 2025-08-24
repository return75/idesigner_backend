<?php

namespace App\Http\Controllers\Api;

use App\Models\TShirt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function index()
    {
        $tshirts = TShirt::with([
            'variants.color',
            'variants.material',
            'variants.size'
        ])->get();

        return response()->json($tshirts);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('tshirts', 'public');
        }

        $tshirt = Tshirt::create([
            'name'  => $validated['name'],
            'image' => $path
        ]);

        return response()->json([
            'message' => 'Tshirt created successfully',
            'data'    => $tshirt
        ], 201);
    }
}
