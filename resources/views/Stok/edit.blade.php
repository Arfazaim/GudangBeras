@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Stok</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('stoks.update', $stok->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="gudang_id">Gudang:</label>
                                <select class="form-control" id="gudang_id" name="gudang_id">
                                    @foreach($gudangs as $gudang)
                                        <option value="{{ $gudang->id }}" {{ $stok->gudang_id == $gudang->id ? 'selected' : '' }}>{{ $gudang->nama_gudang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="produk_id">Produk:</label>
                                <select class="form-control" id="produk_id" name="produk_id">
                                    @foreach($produks as $produk)
                                        <option value="{{ $produk->id }}" {{ $stok->produk_id == $produk->id ? 'selected' : '' }}>{{ $produk->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah:</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $stok->jumlah }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
