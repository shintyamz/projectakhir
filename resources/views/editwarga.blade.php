@extends('layout/main')

@section('content')
    <h3>Edit</h3>
    <a href="/bukuhutang" class="btn btn-sm btn-outline-primary mt-3"
    title="ke buku catatan hutang">
    << kembali</a>
    <form action="{{ '/bukuhutang/' . $data->id }}"
     method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 col-6 mt-3">
            <h4>ID data hutang : {{ $data-> id }}</h4>
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama"
            name="nama" value="{{ $data->nama }}"
            placeholder="masukkan nama anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat"
            name="alamat" value="{{ $data->alamat }}"
            placeholder="masukkan alamat anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur"
            name="umur" value="{{ $data->umur }}"
            placeholder="masukkan umur anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="no_telfon" class="form-label">No Telfon</label>
            <input type="text" class="form-control" id="no_telfon"
            name="no_telfon" value="{{ $data->no_telfon }}"
            placeholder="masukkan nomor telfon anda disini">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="jumlah_hutang" class="form-label">Jumlah Hutang</label>
            <input type="text" class="form-control" id="jumlah_hutang"
            name="jumlah_hutang" value="{{ $data->jumlah_hutang }}"
            placeholder="masukkan jumlah hutang anda">
        </div>
        <button type="submit" class="btn btn-primary btn-sm
        mt-2">Update</button>
    </form>
@endsection
        