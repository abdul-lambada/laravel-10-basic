<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Data Pegawai</h3>

                <p>Cari Data Pegawai :</p>

                <div class="form-group">
                    <form action="/pegawai/cari" method="GET" class="form-inline">
                        <input class="form-control" type="text" class="mb-2" name="cari" placeholder="Cari Pegawai .."
                            value="{{ old('cari') }}">
                        <input class="btn btn-primary mb-2" type="submit" value="CARI">
                    </form>
                </div>

                <br />

                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $p->pegawai_nama }}</td>
                            <td>{{ $p->pegawai_jabatan }}</td>
                            <td>{{ $p->pegawai_umur }}</td>
                            <td>{{ $p->pegawai_alamat }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                Halaman : {{ $pegawai->currentPage() }} <br />
                Jumlah Data : {{ $pegawai->total() }} <br />
                Data Per Halaman : {{ $pegawai->perPage() }} <br />
                <br />

                {{ $pegawai->links() }}
            </div>
        </div>
    </div>
</body>

</html>
