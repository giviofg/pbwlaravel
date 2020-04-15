<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data dari Database dengan Laravel | TIF UVERS 2020</title>
</head>
<body>
    <h2>Ini adalah data dari database</h2>
    <a href="/pegawai/tambah"> + Tambah Pegawai Baru </a> 
    <br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td><a href="/pegawai/edit/{{ $p->id }}">Edit </a> | <a href="/pegawai/hapus/{{ $p->id }}">Hapus </a></td>
        </tr>
        @endforeach
    </table>
</body>
</html> -->

@extends('template')

@section('content')
    @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td><a href="/pegawai/edit/{{ $p->id }}">Edit </a> &ensp; | &ensp; <a href="/pegawai/hapus/{{ $p->id }}"> Hapus </a></td>
        </tr>
    @endforeach
    @stop