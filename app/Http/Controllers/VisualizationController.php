<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizationController extends Controller
{
    public function index()
    {
        return view('visualisasi.index');
    }

    public function pariwisata()
    {
        return view('visualisasi.pariwisata');
    }

    public function kesehatan()
    {
        return view('visualisasi.kesehatan');
    }

    public function pendidikan()
    {
        return view('visualisasi.pendidikan');
    }
}
