<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin_type',
        'translated_type'
    ];

    public function datasource()
    {
        return $this->belongsTo(datasource::class);
    }
}
