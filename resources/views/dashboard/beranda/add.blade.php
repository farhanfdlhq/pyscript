@extends('dashboard/index')

@section('judul_halaman', 'Tambah Beranda')

@section('konten')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Data beranda</h5>
        </div>
        <form action="/dashboard/beranda/add/simpan" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="txt_judul_beranda" class="form-control" id="exampleInputEmail1"
                        placeholder="Masukan judul untuk beranda">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi judul</label>
                    <input type="text" name="txt_deskripsi_judul" class="form-control" id="exampleInputPassword1"
                        placeholder="Masukan deskripsi judul untuk beranda">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea name="txt_deskripsi_beranda" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Upload gambar</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="txt_file_gambar_beranda" class="custom-file-input"
                                id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Status tampil beranda</label>
                    <select class="form-control" name="txt_status tampil_beranda">
                        <option value="0">Tidak</option>
                        <option value="1">Tampil</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>




    </div>
    </div>

@endsection
