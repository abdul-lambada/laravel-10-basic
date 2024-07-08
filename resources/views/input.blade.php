<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Input Data Buruh</h3>

                        <br>
                        {{--  Menampilkan validasi errors  --}}
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <br>
                        {{--  form validation  --}}

                        <form action="/proses" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                            </div>
                            <div class="form-group">
                                <label for="pekerja">Pkerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" value="{{old('pekerjaan')}}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="number" class="form-control" name="usia" value="{{old('usia')}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Proses">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
