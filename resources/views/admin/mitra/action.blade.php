<?php
// jika $data ada ISI-nya maka actionnya adalah edit, jika KOSONG : insert
$is_edit = isset($data);
?>
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


        <div class="row">
            <div class="col-12">
                <h2>Tambah Data Mitra</h2>
            </div>

            <div class="col-3">
                <form action="{{ $url }}" method="post" autocomplete="off">
                    @csrf
                    {!! $is_edit ? method_field('PUT') : '' !!}
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="{{ isset($data->username) ? $data->username : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="mitra_nama_perusahaan" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="mitra_nama_perusahaan"
                            name="mitra_nama_perusahaan"
                            value="{{ isset($data->mitra_nama_perusahaan) ? $data->mitra_nama_perusahaan : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="mitra_nama_apk" class="form-label">Nama Aplikasi</label>
                        <input type="text" class="form-control" id="mitra_nama_apk" name="mitra_nama_apk"
                            value="{{ isset($data->mitra_nama_apk) ? $data->mitra_nama_apk : '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">{!! $is_edit ? 'Edit' : 'Tambah' !!}</button>
                </form>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>
