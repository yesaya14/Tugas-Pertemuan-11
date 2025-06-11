<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Models\Matakuliah;
use App\Models\prodi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata',[BiodataController::class,'index']);
Route::POST('biodata',[BiodataController::class,'proses']);



Route::get('prodi/create', function () {
    prodi::create([
        'kode' => 'SI23',
        'nama' => 'Informatika'
    ]);
    return "Data Prodi Berhasil Ditambah";
});

Route::get('prodi/lihat', function () {
    $prodi = prodi::all();
    foreach ($prodi as $data) {
        echo $data->kode . " - " . $data->nama . "<br>";
    }
});

Route::get('matakuliah/create', function () {
    Matakuliah::create([
        'nama' => 'Struktur Data',
        'sks' => 3
    ]);
    return "Data Matakuliah Berhasil Ditambah";
});

Route::get('matakuliah/lihat', function () {
    $matakuliah = Matakuliah::all();
    foreach ($matakuliah as $data) {
        echo $data->nama . " - " . $data->sks . "<br>";
    }
});