@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Transaksi</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="gudang_id">Gudang:</label>
                                <select class="form-control" id="gudang_id" name="gudang_id">
                                    @foreach($gudangs as $gudang)
                                        <option value="{{ $gudang->id }}" {{ $transaksi->gudang_id == $gudang->id ? 'selected' : '' }}>{{ $gudang->nama_gudang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="produk_id">Produk:</label>
                                <select class="form-control" id="produk_id" name="produk_id">
                                    @foreach($produks as $produk)
                                        <option value="{{ $produk->id }}" {{ $transaksi->produk_id == $produk->id ? 'selected' : '' }}>{{ $produk->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pelanggan_id">Pelanggan:</label>
                                <select class="form-control" id="pelanggan_id" name="pelanggan_id">
                                    @foreach($pelanggans as $pelanggan)
                                        <option value="{{ $pelanggan->id }}" {{ $transaksi->pelanggan_id == $pelanggan->id ? 'selected' : '' }}>{{ $pelanggan->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah:</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $transaksi->jumlah }}">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="{{ $transaksi->harga }}">
                            </div>

                            <div class="form-group">
                                <label for="total_harga">Total Harga:</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga" value="{{ $transaksi->total_harga }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

