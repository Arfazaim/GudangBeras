@extends('layouts.app')

@section('title', 'Edit Pemasok')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Pemasok</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pemasoks.update', $pemasok->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="kode_pemasok">Kode Pemasok:</label>
                                <input type="text" class="form-control" id="kode_pemasok" name="kode_pemasok"
                                    value="{{ $pemasok->kode_pemasok }}">
                            </div>

                            <div class="form-group">
                                <label for="nama_pemasok">Nama Pemasok:</label>
                                <input type="text" class="form-control" id="nama_pemasok" name="nama_pemasok"
                                    value="{{ $pemasok->nama_pemasok }}">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat">{{ $pemasok->alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="no_telepon">No. Telepon:</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                    value="{{ $pemasok->no_telepon }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $pemasok->email }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
