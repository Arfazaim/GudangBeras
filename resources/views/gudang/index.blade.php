@extends('dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h1>Data Gudang</h1>
                        <a href="{{ route('gudang.create') }}" class="btn btn-primary">Tambah</a>
                        <table class="table-fixed">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-1 border-black">Kode Gudang</th>
                                    <th scope="col">Nama Gudang</th>
                                    <th scope="col" class="px-5">Alamat</th>
                                    <th scope="col">Kapasitas</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gudangs as $gudang)
                                    <tr>
                                        <td>{{ $gudang->kode_gudang }}</td>
                                        <td>{{ $gudang->nama_gudang }}</td>
                                        <td class="px-5">{{ Str::limit($gudang->alamat) }}</td>
                                        <td>{{ $gudang->kapasitas }}</td>
                                        <td>{{ $gudang->status ? 'Aktif' : 'Nonaktif' }}</td>
                                        <td>
                                            <a href="{{ route('gudang.edit', $gudang->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('gudang.destroy', $gudang->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
