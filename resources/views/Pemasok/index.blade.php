@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daftar Pemasok</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Pemasok</th>
                                    <th>Nama Pemasok</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pemasoks as $item)
                                <tr>
                                    <td>{{ $item->kode_pemasok }}</td>
                                    <td>{{ $item->nama_pemasok }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telepon }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="{{ route('pemasok.edit', $item->id) }}">Edit</a>
                                        <form action="{{ route('pemasok.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('pemasok.create') }}">Tambah Pemasok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
