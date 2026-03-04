<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

public function store(Request $request)
{
    $validated = $request->validate([
        'house_id' => 'required|exists:houses,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ]);

    $house = House::find($validated['house_id']);

    if ($house->status !== 'available') {
        return response()->json([
            'status' => 'error',
            'message' => 'This house has already been selected.'
        ], 422);
    }

    $house->update([
        'status' => 'pending'
    ]);

    return response()->json([
        'status' => 'success'
    ]);
}

public function uploadGeoJson(Request $request)
{
    $request->validate([
        'geojson' => 'required|file'
    ]);

    $content = json_decode(file_get_contents($request->file('geojson')));

    foreach ($content->features as $feature) {
        House::create([
            'house_number' => $feature->properties->house_number,
            'geometry' => json_encode($feature->geometry),
            'status' => 'available'
        ]);
    }

    return back()->with('success', 'Houses imported.');
}
