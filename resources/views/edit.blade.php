<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data dari Database dengan Laravel | TIF UVERS 2020</title>
</head>
<body>
    <h2>Edit data Laravel</h2>
    <a href="/pegawai"> Kembali </a>
    <br>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}"> <br>
        Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br>
        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br>
        Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br>
        Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html> -->

@extends('template3')

@section('content')
<div class="card-header">
                    <h3 class="card-title">&nbsp;Ubah data <b>{{ $p->jabatan }} {{ $p->nama }}</b>  dari tabel <i><b>`tblpegawai`</b></i> pada database <i><b>`dbpbw`</b></i></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/pegawai/update" method="post">
                    {{ csrf_field() }}
                    <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="{{ $p->id }}">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required="required" value="{{ $p->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->jabatan }}">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" class="form-control" name="umur" required="required" value="{{ $p->umur }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" required="required">{{ $p->alamat }}</textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required">
                        <label class="form-check-label" for="exampleCheck1">Saya yakin ingin mengubah data ini</label>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <a class="btn btn-primary" href="/pegawai" role="button"> Kembali </a>&nbsp;
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
@stop