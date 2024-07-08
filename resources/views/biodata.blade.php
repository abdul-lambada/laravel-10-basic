<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bioadata Dosen</title>
</head>
<body>

    <h1>Biodata Dosen</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia eveniet, consectetur quis tempore quisquam quibusdam natus doloremque quidem sint eum, facere odio? Corrupti eligendi adipisci, architecto laborum laudantium at dolore?</p>

    <hr>
    <p>Nama: {{$nama}}</p>
    <span>Mata Pelajaran:</span>
    <ul>
        @foreach ($pelajaran as $matkul)
            <li>{{$matkul}}</li>
        @endforeach
    </ul>

</body>
</html>
