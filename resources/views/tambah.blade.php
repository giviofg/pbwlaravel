<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data dari Database dengan Laravel | TIF UVERS 2020</title>
</head>
<body>
<h2>Ini adalah data dari database</h2>
    <a href="/pegawai"> Kembali </a> 
    <br>
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br>
        Jabatan <input type="text" name="jabatan" required="required"> <br>
        Umur <input type="text" name="umur" required="required"> <br>
        Alamat <textarea name="alamat"></textarea> <br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html> -->

@extends('template2')

@section('content')
<div class="card-header">
                    <h3 class="card-title">&nbsp;Form untuk mengisi data ke tabel <i><b>`tblpegawai`</b></i> pada database <i><b>`dbpbw`</b></i></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/pegawai/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required="required" placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" class="form-control" name="umur" required="required" placeholder="Masukkan Umur">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" required="required" placeholder="Masukkan Alamat"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required">
                        <label class="form-check-label" for="exampleCheck1">Saya yakin ingin menambahkan data baru</label>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <a class="btn btn-primary" href="/pegawai" role="button"> Kembali </a>&nbsp;
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
@stop