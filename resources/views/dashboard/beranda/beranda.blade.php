@extends('dashboard/index')

@section('judul_halaman', 'Beranda')

@section('konten')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Data beranda</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title"></h6>

            <p class="card-text">Form beranda ini untuk melihat data beranda pada website </p>
            <p class="card-text">Pilih tombol tambah untuk menambahkan data beranda untuk website</p>
            <a href="/dashboard/beranda/add" class="btn btn-primary">Tambah</a>



            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>judul_beranda</th>
                        <th>deskripsi_judul</th>
                        <th>deskripsi</th>
                        <th>file_gambar</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beranda as $beranda)
                        <tr>
                            <td>{{ $beranda->judul_beranda }}</td>
                            <td>{{ $beranda->deskripsi_judul_beranda }}</td>
                            <td>{{ $beranda->deskripsi_beranda }}</td>
                            <td>{{ $beranda->file_gambar_beranda }}</td>
                            <td>{{ $beranda->status_tampil_beranda }}</td>
                            <td>
                                <a href="/dashboard/beranda/edit/{{ $beranda->id }}" class="btn btn-warning">Edit</a>
                                <a href="/dashboard/beranda/hapus/{{ $beranda->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>judul_beranda</th>
                        <th>deskripsi_judul</th>
                        <th>deskripsi</th>
                        <th>file_gambar</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection
