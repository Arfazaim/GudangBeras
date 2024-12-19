@extends('dashboard')

@section('content')
    <h1>Tambah Pelanggan</h1>
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_telepon">No. Telepon</label>
            <input type="text" name="no_telepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
