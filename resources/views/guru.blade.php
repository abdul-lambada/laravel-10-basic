<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="card-header text-center">
            <h1>Data Guru</h1>
        </div>

        <div class="card-body">
            <a href="/guru" class="btn btn-primary">Data Guru</a>
            |
            <a href="/guru/trash" class="btn btn-warning">Tong Sampah</a>

            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th width="1%">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  memanipulasi data menggunakan foreach  --}}
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{$g->nama}}</td>
                            <td>{{$g->umur}}</td>
                            <td>
                                <a href="/guru/hapus/{{$g->id}}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
