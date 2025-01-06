@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Transaksi</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('transaksi.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="gudang_id">Gudang:</label>
                                <select class="form-control" id="gudang_id" name="gudang_id">
                                    @foreach ($gudangs as $gudang)
                                        <option value="{{ $gudang->kode_gudang }}">{{ $gudang->nama_gudang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="produk_id">Produk:</label>
                                <select class="form-control" id="produk_id" name="produk_id">
                                    @foreach ($produks as $produk)
                                        <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pelanggan_id">Pelanggan:</label>
                                <select class="form-control" id="pelanggan_id" name="pelanggan_id">
                                    @foreach ($pelanggans as $pelanggan)
                                        <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah:</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="number" class="form-control" id="harga" name="harga">
                            </div>

                            <div class="form-group">
                                <label for="total_harga">Total Harga:</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga" readonly>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jumlahInput = document.getElementById('jumlah');
            const hargaInput = document.getElementById('harga');
            const totalHargaInput = document.getElementById('total_harga');

            function calculateTotal() {
                const jumlah = parseFloat(jumlahInput.value) || 0;
                const harga = parseFloat(hargaInput.value) || 0;
                totalHargaInput.value = jumlah * harga;
            }

            jumlahInput.addEventListener('input', calculateTotal);
            hargaInput.addEventListener('input', calculateTotal);
        });
    </script>
@endsection
