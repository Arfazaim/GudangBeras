@extends('dashboard')

@section('content')
    <h1>Data Stok</h1>
    <a href="{{ route('stok.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Stok</th>
                <th>Kode Produk</th>
                <th>Kode Gudang</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stoks as $stok)
                <tr>
                    <td>{{ $stok->id_stok }}</td>
                    <td>{{ $stok->id_produk }}</td>
                    <td>{{ $stok->id_gudang }}</td>
                    <td>{{ $stok->jumlah }}</td>
                    <td>{{ $stok->tanggal_masuk }}</td>
                    <td>{{ $stok->tanggal_keluar }}</td>
                    <td>
                        <a href="{{ route('stok.edit', $stok->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('stok.destroy', $stok->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
