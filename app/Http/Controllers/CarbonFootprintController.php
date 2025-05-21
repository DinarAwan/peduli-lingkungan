<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarbonFootprint;
use App\Models\CarbonCalculation;

class CarbonFootprintController extends Controller
{
    public function index()
    {
        return view('carbon.index');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'transportation_type' => 'required|string',
            'transportation_distance' => 'required|numeric',
            'electricity_usage' => 'required|numeric',
            'meat_consumption' => 'required|string',
            'waste_produced' => 'required|numeric',
            'flights_per_year' => 'required|numeric',
        ]);

        $calculator = new CarbonCalculation();
        $result = $calculator->calculateFootprint($validated);

        $carbonFootprint = CarbonFootprint::create([
            'user_id' => auth()->id() ?? null,
            'transportation_emissions' => $result['transportation'],
            'electricity_emissions' => $result['electricity'],
            'food_emissions' => $result['food'],
            'waste_emissions' => $result['waste'],
            'flight_emissions' => $result['flights'],
            'total_emissions' => $result['total'],
        ]);

        return redirect()->route('carbon.result')->with('carbon_id', $carbonFootprint->id);
    }

    public function result()
    {
        $carbonId = session('carbon_id');
        $carbonFootprint = CarbonFootprint::findOrFail($carbonId);
        
        return view('carbon.result', compact('carbonFootprint'));
    }
}