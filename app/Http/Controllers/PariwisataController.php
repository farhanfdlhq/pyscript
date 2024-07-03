<?php

// app/Http/Controllers/PariwisataController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PariwisataController extends Controller
{
    public function index()
    {
        // Baca file JSON
        $path = public_path('data/pariwisata.json');
        if (!File::exists($path)) {
            abort(404, 'File not found');
        }

        $data = json_decode(File::get($path), true);

        // Kirim data ke view
        return view('visualisasi.pariwisata', compact('data'));
    }
}
