<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SerieController extends Controller
{
    public Serie $serie;

    /* USING A DIRECT CONNECTION:
     *  public function __construct()
     *  {
     *      $this->serie = DB::select('SELECT name FROM series;');
     *  }
     */

    public function __construct()
    {
        $this->serie = new Serie();
    }

    public function index()
    {  
        $allSeries = $this->serie->getAllSeries();
        return view('series.index')->with('series', $allSeries);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $seriesName = $request->input('nome');

        /* USING A DIRECT CONNECTION:
         *  DB::insert('INSERT INTO series (name) VALUES (?)', [$nomeSerie]); 
         */

        $this->serie->saveSeries($seriesName);

        return redirect('api/series');
    }
}
