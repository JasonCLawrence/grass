<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LandMeasurementController extends Controller
{
    public function getLandArea(Request $request)
    {
        // Validate the input address
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        $address = $request->input('address');

        // Google Maps API Key (you'll replace this with your actual API key)
        $apiKey = env('GOOGLE_MAPS_API_KEY');
        
        // Step 1: Get the coordinates (Latitude & Longitude) for the address
        $client = new Client();
        $response = $client->get("https://maps.googleapis.com/maps/api/geocode/json", [
            'query' => [
                'address' => $address,
                'key' => $apiKey,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        if ($data['status'] !== 'OK') {
            return response()->json(['error' => 'Address not found'], 400);
        }

        // Step 2: Extract latitude and longitude from the response
        $latitude = $data['results'][0]['geometry']['location']['lat'];
        $longitude = $data['results'][0]['geometry']['location']['lng'];

        // In real scenarios, you'd need a more complex method here
        // to calculate the area from coordinates or use a boundary service.

        // Return the coordinates for now (as an example)
        return response()->json([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);
    }
}
