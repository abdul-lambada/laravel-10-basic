<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru Hapus</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card-header text-center">
            <h5>Data Guru Yang Sudah Dihapus</h5>
        </div>
        <div class="card-body">
            <a href="/guru" class="btn btn-secondary btn-sm">Data Guru</a>
            |
            <a href="/guru/trash" class="btn btn-warning btn-sm">Tong Sampah</a>

            <br>
            <br>
            <a href="/guru/kembalikan_semua" class="btn btn-success btn-sm">Kembalikan Semua Data</a>
            |
            <a href="/guru/hapus_permanen_semua" class="btn btn-danger btn-sm">Hapus Permanen Semua</a>
            <br>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  Menggunakan foreach untuk memanipulasi data guru  --}}
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{ $g->nama }}</td>
                            <td>{{ $g->umur }}</td>
                            <td>
                                <a href="/guru/kembalikan/{{$g->id}}" class="btn btn-secondary btn-sm">Restore</a>
                                <a href="/guru/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus
                                    Permanen</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
