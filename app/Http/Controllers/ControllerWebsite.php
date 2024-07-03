<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda; // Menggunakan model Beranda

class ControllerWebsite extends Controller
{
    public function index()
    {
        // Tampilkan daftar beranda
        $beranda = Beranda::all();
        return view('web.index', ['beranda' => $beranda]);
    }
    public function dashboard()
    {
        // Tampilkan daftar beranda
        return view('dashboard.main');
    }

    public function create()
    {
        // Tampilkan form untuk membuat beranda baru
        return view('index');
    }

    public function store(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'title' => 'required|max:25',
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        // Simpan beranda baru
        $beranda = new Beranda($validatedData);
        $beranda->save();

        return redirect()->route('dashboard.main')->with('success', 'Beranda berhasil ditambahkan!');
    }
}
