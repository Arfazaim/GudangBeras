@extends('layouts.app')

@section('title', 'Tambah Pemasok')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Pemasok</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pemasoks.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="kode_pemasok">Kode Pemasok:</label>
                                <input type="text" class="form-control" id="kode_pemasok" name="kode_pemasok">
                            </div>

                            <div class="form-group">
                                <label for="nama_pemasok">Nama Pemasok:</label>
                                <input type="text" class="form-control" id="nama_pemasok" name="nama_pemasok">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="no_telepon">No. Telepon:</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
