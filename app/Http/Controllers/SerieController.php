<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerieController extends Controller
{

    public $series;
    public function index()
    {
        $this->series = [
            'Punisher', 
            'Lost', 
            'Grey\'s Anatomy'
        ];

        return view('series.index')->with('series', $this->series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');

        if (DB::insert('INSERT INTO series (name) VALUES (?)', [$nomeSerie])) {
            dd($this->series);
            return view('series.index')->with('series', $this->series);

        } else {
            return;
        }
    }
}
