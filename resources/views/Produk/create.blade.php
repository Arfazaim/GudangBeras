@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Produk</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('produk.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="kode_produk">Kode Produk:</label>
                                <input type="text" class="form-control" id="kode_produk" name="kode_produk">
                            </div>

                            <div class="form-group">
                                <label for="nama_produk">Nama Produk:</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="berat">Berat (gram):</label>
                                <input type="number" class="form-control" id="berat" name="berat">
                            </div>

                            <div class="form-group">
                                <label for="harga_beli">Harga Beli:</label>
                                <input type="number" class="form-control" id="harga_beli" name="harga_beli">
                            </div>

                            <div class="form-group">
                                <label for="harga_jual">Harga Jual:</label>
                                <input type="number" class="form-control" id="harga_jual" name="harga_jual">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
