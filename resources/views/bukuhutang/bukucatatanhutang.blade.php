@extends('layout/main')

@section('content')
<div class="d-flex justify-content-between">
    <h3>Buku Catatan Hutang</h3>
<div>
    <a href="bukuhutang/create" class="btn btn-primary btn-sm" 
    title="buku catatan hutang">+bukuhutang</a>
</div>
</div>
<table class="table tabel-hover">
    <tabel head>

        <tr> 
            <th>nama</th>
            <th>alamat</th>
            <th>umur</th>
            <th>no telfon</th>
            <th>jumlah hutang</th>
            <th class="text-center">Operasi</th>
        </tr>

    </tabel head>    
    <tbody class="table-group-divider">
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{ $item->umur }}</td>
                <td>{{  $item->no_telfon}}</td>
                <td>{{  $item->jumlah_hutang}}</td>
                <td class="text-center">
                    <a href= "{{ url('/bukuhutang/' . $item->id . '/edit' ) }}" class="btn btn-warning btn-sm"
                    title="edit data">Edit</a>
                    <form action="{{ route("bukuhutang.delete",["id"=>$item->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger btn-sm delete-btn"
                    title="hapus data">Hapus</button>
                    </form>
                </td>
            </tr>
            
        @endforeach
</tbody>
</table>

@endsection
       