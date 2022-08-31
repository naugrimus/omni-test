<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    
    protected $table = 'ratings'


    // used as 'skating', vis weer etc etc'
    // min_temp is used as lowest value to later check if a temperature is in its range
    // max_temp is used as highest value to later check if a temperature is in its range
    protected $fillable = [
        'rating',
        'wind',
        'type',
        'min_temp',
        'max_temp'
    ];

    public function ratings() {
        return $this->hasMany(WeatherRating::class);

    }

    public function calculateRating($temp, $wind, $type) {
        // query the rating where the temperature is between certain values,
        // the weathertype is from a weathertype
        // and the wind is between values
    }
    
}
