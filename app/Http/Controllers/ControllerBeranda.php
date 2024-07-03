<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;

class ControllerBeranda extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel beranda menggunakan Eloquent ORM
        $beranda = Beranda::all();
        // Passing data yang didapat ke view beranda.blade.php
        return view('dashboard.beranda.beranda', ['beranda' => $beranda]);
    }

    public function add()
    {
        return view('dashboard.beranda.add');
    }

    public function simpan(Request $request)
    {
        if ($request->txt_status == 1) {
            Beranda::where('status', 1)->update([
                'status' => 0
            ]);
        }

        $file = $request->file('txt_gambar');
        $nama_file = time() . "." . $file->getClientOriginalExtension();
        $tujuan_upload = 'assets/website/assets/images';

        // Menggunakan Eloquent untuk menyimpan data
        Beranda::create([
            'title' => $request->txt_title,
            'judul' => $request->txt_judul,
            'deskripsi' => $request->txt_deskripsi,
            'gambar' => $nama_file,
            'status' => $request->txt_status,
        ]);

        $file->move($tujuan_upload, $nama_file);
        return redirect('/dashboard/beranda');
    }

    public function edit($id)
    {
        // Mengambil data berdasarkan id menggunakan Eloquent ORM
        $beranda = Beranda::find($id);
        return view('dashboard.beranda.edit', ['beranda' => $beranda]);
    }
}
