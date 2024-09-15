<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function getLocations()
    {
        $locations = Item::all();
        return view('map', compact('locations'));
    }

    public function saveLocation(Request $request)
    {
        // Validate input
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Save to database
        $newItem = new Item;
        $newItem->latitude = $request->latitude;
        $newItem->longitude = $request->longitude;
        $newItem->save();

        return back()->with('success', 'Location saved successfully!');
    }
}
