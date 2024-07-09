<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengguna</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Data Pengguna</h3>
                <h4 class="text-center">Relasi One to One Relationship</h4>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{--  menggunakan foreach untuk memanipulasi data Pengguna  --}}
                        @foreach ($pengguna as $p)
                            <tr>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->telepon->nomor_telepon}}</td>
                                {{--  pemangggilan langsung di table dengan menggunakan nomor_telepon dari table telepon  --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
