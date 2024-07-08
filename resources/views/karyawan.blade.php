<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
</head>
<body>

    <h1>Data karyawan</h1>

    <ul>
        @foreach ($karyawan as $k)
            <li>{{"Nama " .$k->nama . ' | Alamat : ' . $k->alamat}}</li>
        @endforeach
    </ul>

</body>
</html>
