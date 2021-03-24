<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //
    public function index(){
        $nama = "Abdul Aziz Rahmawan";

        $matkul = ["Algoritma","Kalkulus","Pemrograman"];

        return view('home', compact('nama','matkul'));
    }
    public function create(){
        return "Method Ini Digunakan Untuk Menampilkan Form Input Data User";
    }
    public function store(Request $request){
        return "Method Ini Digunakan Untuk Menciptakan Data User Baru";
    }
    public function show($id){
        return "Method Ini Digunakan Untuk Menampilkan Data User Dengan ID =" .$id;
    }
    public function edit($id){
        return "Method Ini Digunakan Untuk Menampilkan Form Edit Data User Dengan ID =" .$id;
    }
    public function update(Request $request, $id){
        return "Method Ini Digunakan Untuk Mengubah Data User  Dengan ID =" .$id;
    }
    public function destroy($id){
        return "Method Ini Digunakan Untuk Menghapus Data User Dengan ID =" .$id;
    }
}
