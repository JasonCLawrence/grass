<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
      public function calculateCost(Request $request)
    {
        // Fetch user inputs
        $services = $request->input('services', []);
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

	//Customer KYC
		$customer_name = $request->input('customer-name');
		$customer_email = $request->input('customer-email');
	//End


        // Define base cost
        $industryStandardRate = 100; // Example: industry standard cost for 5000 sq ft lawn
        $totalCost = 0;

        // Calculate total cost based on selected services
        if (in_array('cutting-line-trimmers', $services)) $totalCost += 30; 
        if (in_array('cutting-bagging', $services)) $totalCost += 40;
        if (in_array('cutting-bagging-disposal', $services)) $totalCost += 50;
        if (in_array('bagging-disposal', $services)) $totalCost += 20;

        // Apply 50% discount
        $totalCost = $totalCost / 2;

        // Return the calculated total cost
        return response()->json(['status' => 'success', 'total_cost' => round($totalCost, 2)]);
    }
}
