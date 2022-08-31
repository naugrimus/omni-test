<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherRating extends Model
{
    use HasFactory;

    protected $table = 'weather_ratings'

    protected $fillable = [
        'rating',
        'temperature',
        'wind'
    ];

    public function rating()
    {
        return $this->belongsTo(Rating::class);
    }

    public function Datasource()
    {
        return $this->belongsTo(Datasource::class);
    }


}
