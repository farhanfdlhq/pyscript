<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beranda;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beranda::create([
            'title' => 'Contoh Title',
            'judul' => 'Contoh Judul',
            'deskripsi' => 'Ini adalah contoh deskripsi.',
            'gambar' => 'contoh-gambar.jpg',
            'status' => 'aktif',
        ]);
    }
}
