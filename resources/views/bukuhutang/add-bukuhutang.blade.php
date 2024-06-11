@extends('layout/main')

@section('content')
    <h3>Tambah</h3>
    <a href="/bukuhutang" class="btn btn-sm btn-outline-primary mt-3"
    title="ke buku catatan hutang"><< kembali</a>
    <form action="{{ route('bukuhutang.post') }}" method="POST">
        @csrf
        <div class="mb-3 col-6 mt-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama"
            name="nama" value="{{ old('nama') }}"
            placeholder="masukkan nama anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat"
            name="alamat" value="{{ old('alamat') }}"
            placeholder="masukkan alamat anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur"
            name="umur" value="{{ old('umur') }}"
            placeholder="masukkan umur anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="no_telfon" class="form-label">No Telfon</label>
            <input type="text" class="form-control" id="no_telfon"
            name="no_telfon" value="{{ old('no_telfon') }}"
            placeholder="masukkan nomor telfon anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="jumlah_hutang" class="form-label">Jumlah Hutang</label>
            <input type="text" class="form-control" id="jumlah_hutang"
            name="jumlah_hutang" value="{{ old('jumlah_hutang') }}"
            placeholder="masukkan jumlah hutang anda">
        </div>
        <button type="submit" class="btn btn-primary btn-sm
        mt-2">Simpan</button>
    </form>
@endsection
        