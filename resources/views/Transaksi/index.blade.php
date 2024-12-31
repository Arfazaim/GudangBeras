@extends('dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Transaksi</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Gudang</th>
                                <th>Produk</th>
                                <th>Pelanggan</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksis as $item)
                            <tr>
                                <td>{{ $item->gudang->nama_gudang }}</td>
                                <td>{{ $item->produk->nama_produk }}</td>
                                <td>{{ $item->pelanggan->nama_pelanggan }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->total_harga }}</td>
                                <td>
                                    <a href="{{ route('transaksi.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('transaksi.create') }}">Tambah Transaksi</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
