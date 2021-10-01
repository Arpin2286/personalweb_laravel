<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',[
        "header" => "My Profile"
    ]);
});

Route::get('/portofolio1', function () {
    return view('Portofolio.portofolio1',[
        "header" => "My Product",
        "judul" => "Semesta Kita",
        "img" => "1.jpg",
        "link" => "https://semesta.id/",
        "deskripsi" => "Sistem Manajemen Sampah Terpadu yang kemudian disebut dengan SEMESTA KITA adalah sebuah sistem informasi manajemen yang membantu program bank sampah untuk dapat melakukan kegiatan administrasi pengelolaan sampah menjadi lebih efektif dan efisien. SEMESTA KITA dapat melakukan manajemen data anggota, pembukuan, data keluar-masuk, manajemen data sampah, promosi produk, serta manajemen iuran, sehingga pengelola serta anggota bank sampah dapat melakukan aktivitas manajemen dengan lebih mudah.",
        "author" => "Anggie Arpin",
        "date" => "February 30, 2020"
    ]);
});

Route::get('/portofolio2', function () {
    return view('Portofolio.portofolio2',[
        "header" => "My Product",
        "judul" => "SSO Informatics",
        "img" => "2.jpg",
        "link" => "https://if.undiksha.ac.id/",
        "deskripsi" => "SSO Informatics adalah Sistem Yang dimiliki oleh HMJ TI Undiksha.",
        "author" => "Anggie Arpin",
        "date" => "February 30, 2020"
    ]);
});

Route::get('/portofolio3', function () {
    return view('Portofolio.portofolio3',[
        "header" => "My Product",
        "judul" => "Prototype Application",
        "img" => "2.jpg",
        "link" => "https://www.figma.com/file/xkeeLL6yJm8TxqChOB8sQM/New-Rudaya?node-id=7%3A2",
        "deskripsi" => "Ini adalah Prototype Aplikasi Rudaya ~ Connect The Art.",
        "author" => "Anggie Arpin",
        "date" => "February 30, 2020"
    ]);
});
