<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function weathertypes() {
        return $this->hasMany(WeatherType::class);

    }

    public function weatherRatings() {
        return $this->hasMany(WeatherRatings::class);

    }
}
