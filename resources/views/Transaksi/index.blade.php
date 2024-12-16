@extends('dashboard')

@section('content')
    <h1>Data Transaksi</h1>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Kode Produk</th>
                <th>Kode Gudang</th>
                <th>ID Pelanggan</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id_transaksi }}</td>
                    <td>{{ $transaksi->id_produk }}</td>
                    <td>{{ $transaksi->id_gudang }}</td>
                    <td>{{ $transaksi->id_pelanggan }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>{{ $transaksi->harga }}</td>
                    <td>{{ $transaksi->total_harga }}</td>
                    <td>
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display: inline-block;">
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
