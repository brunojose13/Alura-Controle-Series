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

    public function getAllSeries()
    {
        $series = self::query()->orderBy('name')->get();
        return $series;
    }

    public function isExistent(string $seriesName) : bool
    {
        $serie = self::query()->where('name', 'like', $seriesName)->get();

        return empty($serie[0]);
    }

    public function saveSeries(string $seriesName)
    {
        if ($this->isExistent($seriesName)) {

            $serie = new Serie();
            $serie->name = $seriesName;
            $serie->save();

        }
    }
}
