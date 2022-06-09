@extends('layouts.main')

@section('container')
    <div class="banner3" style="padding-top: 8%; padding-bottom: 8%;">
        <div class="container">
            <h2 class="tittle text-center pb-4" style="font-family: 'Gill Sans'; font-size: 80px; color: rgb(255, 255, 255);"
                ><img width="150" src="img/bijikopi.png" alt="">C'Beans</h2>
            <div class="row g-5 text-center" style="font-family: 'Britannic'; font-size: 25px;">
              
              @foreach ($tampil as $item)
              <div class="col-4">
                <div class="card">
                  <div class="cropped-img" style="width: 340px; height: 300px; overflow:hidden">
                    <img src="{{ $item->foto }}" class="card-img-center" alt="...">
                  </div>
                    <div class="card-body">
                      <a class="nav-link active" href="/cbeans/{{ $item->slug }}">{{ $item->nama }}</a>
                    </div>
                  </div>
              </div>
              @endforeach
            </div>
          </div>
    </div>
@endsection