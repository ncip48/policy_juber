<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="pt-5 d-flex justify-content-between">
            <div class="col">
                <h1>Selamat Datang di Policy</h1>
                <p>Ini adalah halaman home</p>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Mitra</h2>
                <a class="btn btn-success" href="{{ route('admin.create') }}">Tambah Data</a>
            </div>

            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Aplikasi</th>
                            <th>Link Policy</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mitras as $key => $mitra)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $mitra->username }}</td>
                                <td>{{ $mitra->mitra_nama_perusahaan }}</td>
                                <td>{{ $mitra->mitra_nama_apk }}</td>
                                <td>
                                    <a href="https://{{ $mitra->username }}.policy.dotech.cfd"
                                        target="_blank">{{ $mitra->username }}.policy.dotech.cfd
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.edit', $mitra) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('admin.destroy', $mitra->mitra_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    No Data!
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>
