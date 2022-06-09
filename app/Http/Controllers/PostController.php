<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class PostController extends Controller
{
    public function index(){
        return view('resep', [
            "nama" => "Resep",
            "kategoris" => Kategori::all()
        ]);
    }

    public function show (Post $post) {
        return view('post', [
            'nama' => $post->nama,
            'post' => $post
        ]);
    }
}
