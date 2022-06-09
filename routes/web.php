<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Cbeans;

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

Route::get('/', function (){
    return view('home',[
        "nama" => "Home",
    ]);
});

Route::get('/resep',[PostController::class, 'index']);

Route::get('/resep/{kategori:slug}', function (Kategori $kategori) {
    return view('kategori', [
        'nama' => $kategori->nama,
        'icon' => $kategori->ikon,
        'posts' => $kategori->posts
    ]);
});

Route::get('/resep/{post:slug}', [PostController::class, 'show']);

Route::get('/cbeans', function () {
    return view('cbeans', [
        "nama" => "C'Beans",
        "tampil" => Cbeans::all()
    ]);
});

Route::get('/cbeans/{cbeans:slug}', function (Cbeans $cbeans) {
    return view('tampilanc', [
        "nama" => $cbeans->nama,
        "cbeans" => $cbeans
    ]);
});

Route::get('/aboutus', function () {
    return view('aboutus', [
        "nama" => "About Us"
    ]);
});