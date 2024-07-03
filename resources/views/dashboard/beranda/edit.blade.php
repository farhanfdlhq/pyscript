<!-- resources/views/dashboard/beranda/edit.blade.php -->
<form action="{{ route('beranda.update', $beranda->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="txt_title">Title</label>
        <input type="text" id="txt_title" name="txt_title" value="{{ $beranda->title }}">
    </div>
    <div>
        <label for="txt_judul">Judul</label>
        <input type="text" id="txt_judul" name="txt_judul" value="{{ $beranda->judul }}">
    </div>
    <div>
        <label for="txt_deskripsi">Deskripsi</label>
        <textarea id="txt_deskripsi" name="txt_deskripsi">{{ $beranda->deskripsi }}</textarea>
    </div>
    <div>
        <label for="txt_gambar">Gambar</label>
        <input type="file" id="txt_gambar" name="txt_gambar">
    </div>
    <div>
        <label for="txt_status">Status</label>
        <input type="checkbox" id="txt_status" name="txt_status" value="1"
            {{ $beranda->status == 1 ? 'checked' : '' }}>
    </div>
    <button type="submit">Update</button>
</form>
