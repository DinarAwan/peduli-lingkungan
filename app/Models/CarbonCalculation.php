<?php

namespace App\Models;

class CarbonCalculation
{
    // Faktor emisi (kg CO2e) berdasarkan penelitian
    private $transportationFactors = [
        'car' => 0.192, // per km
        'bus' => 0.105, // per km
        'train' => 0.041, // per km
        'bicycle' => 0, // per km
        'walk' => 0, // per km
        'motorcycle' => 0.103, // per km
    ];

    private $electricityFactor = 0.5; // kg CO2e per kWh (rata-rata)

    private $meatConsumptionFactors = [
        'high' => 1000, // kg CO2e per tahun
        'medium' => 600, // kg CO2e per tahun
        'low' => 300, // kg CO2e per tahun
        'vegetarian' => 200, // kg CO2e per tahun
        'vegan' => 150, // kg CO2e per tahun
    ];

    private $wasteFactor = 0.5; // kg CO2e per kg sampah

    private $flightFactor = 200; // kg CO2e per penerbangan (rata-rata)

    public function calculateFootprint($data)
    {
        //transportasi
        $transportationEmissions = $this->transportationFactors[$data['transportation_type']] * $data['transportation_distance'] * 365;

        // listrik
        $electricityEmissions = $this->electricityFactor * $data['electricity_usage'] * 12;

        //makanan
        $foodEmissions = $this->meatConsumptionFactors[$data['meat_consumption']];

        //sampah
        $wasteEmissions = $this->wasteFactor * $data['waste_produced'] * 52;

        //penerbangan
        $flightEmissions = $this->flightFactor * $data['flights_per_year'];

        // Total emisi
        $totalEmissions = $transportationEmissions + $electricityEmissions + $foodEmissions + $wasteEmissions + $flightEmissions;

        return [
            'transportation' => $transportationEmissions,
            'electricity' => $electricityEmissions,
            'food' => $foodEmissions,
            'waste' => $wasteEmissions,
            'flights' => $flightEmissions,
            'total' => $totalEmissions,
        ];
    }
}