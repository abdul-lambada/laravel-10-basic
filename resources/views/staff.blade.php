<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Staff</title>
    {{--  link Bootstarp  --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="col mt-5">
            <div class="card-header text-center">
                <span>CRUD Data Staff</span>
            </div>
            <div class="card-body">
                <a href="/staff/tambah" class="btn btn-primary mb-2">Input Data Staff</a>

                <table class="tatble table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{--  membuat foreach untuk memanipulasi data staff  --}}
                        @foreach ($staff as $s)
                            <tr>
                                <td>{{$s->nama}}</td>
                                <td>{{$s->alamat}}</td>

                                <td>
                                    <a href="/staff/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/staff/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
