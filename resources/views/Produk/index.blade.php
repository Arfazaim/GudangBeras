@extends('dashboard')

@section('content')
    <h1>Data Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Berat</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr>
                    <td>{{ $produk->kode_produk }}</td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>{{ $produk->berat }}</td>
                    <td>{{ $produk->harga_beli }}</td>
                    <td>{{ $produk->harga_jual }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline-block;">
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
