<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
</head>
<body>

    {{--  menambahkan style pagination  --}}
    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin: 0.1rem;
        }
    </style>

    <h2>Laravel CRUD Pegawai</h2>
    <hr>
    <h3>Data Pegawai</h3>
    <hr>

    <a href="/pegawai/tambah"> + Tambah Data Pegawai</a>

    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        {{--  Menggunkan Foreach untuk melakukan perulangan dan menampilkan data  --}}
        @foreach ($pegawai as $p)
        <tr>
            <td>{{$p->pegawai_nama}}</td>
            <td>{{$p->pegawai_jabatan}}</td>
            <td>{{$p->pegawai_umur}}</td>
            <td>{{$p->pegawai_alamat}}</td>
            <td>
                <a href="/pegawai/edit/{{$p->pegawai_id}}">Edit</a>
                |
                <a href="/pegawai/hapus/{{$p->pegawai_id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br>
    Halaman : {{$pegawai->currentPage()}} <br>
    Jumlah Data : {{$pegawai->total()}} <br>
    Data per Halaman : {{$pegawai->perPage()}} <br>


    {{$pegawai->links()}}

</body>
</html>
