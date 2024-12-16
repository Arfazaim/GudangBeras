@extends('dashboard')

@section('content')
    <h1>Data Pemasok</h1>
    <a href="{{ route('pemasok.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Pemasok</th>
                <th>Nama Pemasok</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemasoks as $pemasok)
                <tr>
                    <td>{{ $pemasok->id_pemasok }}</td>
                    <td>{{ $pemasok->nama_pemasok }}</td>
                    <td>{{ $pemasok->alamat }}</td>
                    <td>{{ $pemasok->no_telepon }}</td>
                    <td>{{ $pemasok->email }}</td>
                    <td>
                        <a href="{{ route('pemasok.edit', $pemasok->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('pemasok.destroy', $pemasok->id) }}" method="POST" style="display: inline-block;">
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
