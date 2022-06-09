@extends('layouts.main')

@section('container')
    <div class="banner3" style="padding-top: 8%; padding-bottom: 8%;">
        <div class="container-xl">
            <h2 class="tittle text-center pb-4" style="font-family: 'Gill Sans'; font-size: 80px; color: rgb(255, 255, 255);">{{ $nama }}</h2>
                <div class="clearfix" style="font-family: 'Baskerville Old Face'; font-size: 20px; color: white">
                    <img src="{{ $post->foto }}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                    <h3 style="font-family: 'Britannic';">Bahan</h3>
                    <p>
                      {{ $post->bahan }}
                    </p>
                    <h3 style="font-family: 'Britannic';">Cara Membuat</h3>
                    <p>
                      {{ $post->tutorial }}
                    </p>
                  </div>
            </div>
          </div>
    </div>
@endsection