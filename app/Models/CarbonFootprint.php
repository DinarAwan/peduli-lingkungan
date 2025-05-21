<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarbonFootprint extends Model
{
    protected $fillable = [
        'user_id',
        'transportation_emissions',
        'electricity_emissions',
        'food_emissions',
        'waste_emissions',
        'flight_emissions',
        'total_emissions',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
