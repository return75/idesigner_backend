<?php

namespace App\Http\Controllers\Api;

use App\Models\UserEditor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserEditorController extends Controller
{
    public function show($user_id)
    {

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'           => 'required|exists:users,id',
            'tshirt_variant_id' => 'required|exists:tshirt_variants,id',
            'editor_data'       => 'required|json',
        ]);

        $editor = UserEditor::create($validated);

        return response()->json([
            'message' => 'User editor data saved successfully',
            'data'    => $editor
        ], 201);
    }
}
