<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getSeries()
    {
        $series = self::query()->orderBy('name')->get();
        return $series;
    }

    public function saveSeries(string $seriesName)
    {
        $serie = new Serie();
        $serie->name = $seriesName;
        $serie->save();
    }
}
