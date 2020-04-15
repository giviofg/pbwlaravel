<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pegawai;

//TAMBAHKAN `USE DB`. KALAU TIDAK, TIDAK AKAN JALAN!==========
use DB;
//============================================================
class PegawaiController extends Controller
{
    public function index(){
        //mengambil data dari tblpegawai
        $pegawai = DB::table('tblpegawai')->get();
        
        // var_dump($pegawai);      -\ 
        //                            >> untuk debug
        // exit;                    -/

        //kemudian kembalikan (kirim) ke view index.blade.php
        return view('index', ['pegawai'=>$pegawai]);
    }

    public function tambah(){
        //panggil dulu view tambah nya
        return view('tambah');
    }

    public function store(Request $request){
        //INSERT data ke dalam tblpegawai
        DB::table('tblpegawai')->insert ([
            'nama'    => $request->nama,
            'jabatan' => $request->jabatan,
            'umur'    => $request->umur,
            'alamat'  => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    public function edit($id){
        //mengambil data dari tblpegawai berdasarkan `id` yang dipilih
        $pegawai = DB::table('tblpegawai')->where('id',$id)->get();
        
        // var_dump($pegawai);      -\ 
        //                            >> untuk debug
        // exit;                    -/
        
        //kemudian lempar data tblpegawai ke view edit.blade.php
        return view('edit',['pegawai' =>$pegawai]);
        return redirect('/pegawai');

    //$pegawai = pegawai::where('id',$id)->get();
    //return view('edit',compact('data'));
    }

    public function update(Request $request){
        DB::table('tblpegawai')->where('id',$request->id)->update([
            'nama'    =>$request->nama,
            'jabatan' =>$request->jabatan,
            'umur'    =>$request->umur,
            'alamat'  =>$request->alamat,
        ]);
        return redirect('/pegawai');
    }

    public function hapus($id){
        //menghapus data yang dipilih
        DB::table('tblpegawai')->where('id',$id)->delete();
        return redirect('/pegawai');
    }

    // CODINGAN PADA STEP SEBELUMNYA (jadi tidak terpakai)====
    // public function index($nama){
    //     return $nama;
    // }

    // public function formulir(){
    //     return view('formulir');
    // }

    // public function proses(Request $request){
    //     $nama = $request->input('nama');
    //     $alamat = $request->input('alamat');
    //     return "Nama : ".$nama.", Alamat : ".$alamat;
    // }======================================================
}
