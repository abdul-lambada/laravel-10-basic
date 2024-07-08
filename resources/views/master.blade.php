<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Laravel</title>
</head>
<body>

    <header>
        <h2>Blog Laravel 10</h2>
        <nav>
            <a href="/blog">Home</a>
            |
            <a href="/blog/tentang">Tentang</a>
            |
            <a href="/blog/kontak">Kontak</a>
        </nav>
    </header>

    <hr>
    <br>
    <hr>

    {{--  bagian Judul halaman blog  --}}
    <h3>@yield('judul_halaman')</h3>

    {{--  bagian kontent blog  --}}
    @yield('konten')

    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; Laravel - 2024</p>
    </footer>
</body>
</html>
