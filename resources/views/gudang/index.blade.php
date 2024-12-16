<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h1>Data Gudang</h1>
                        <a href="{{ route('gudang.create') }}" class="btn btn-primary">Tambah</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Gudang</th>
                                    <th>Nama Gudang</th>
                                    <th>Alamat</th>
                                    <th>Kapasitas</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gudangs as $gudang)
                                    <tr>
                                        <td>{{ $gudang->id_gudang }}</td>
                                        <td>{{ $gudang->nama_gudang }}</td>
                                        <td>{{ $gudang->alamat }}</td>
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
    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>

</html>
