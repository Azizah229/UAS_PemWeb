@extends('layouts.main')

@section('container')
<div class="resep1">
    <h1 style="text-align: center; font-size: 10mm;font-family:'Gill Sans'; color:white; text-shadow:3px 2px 5px black; padding-top: 80px">RESEP</h1>
</div>

@foreach ($kategoris as $kategori)
<center><div class="card" style="width: 50rem; padding-top: 10px">
  <h5 class="card-title">{{ $kategori->nama }}</h5>
  <div class="cropped-img" style="height: 500px; overflow:hidden">
  <img style="" src="{{ $kategori->foto }}" class="card-img-top" alt="foto">
  </div>
  <div class="card-body" style="padding-top: 20px">
    <a href="/resep/{{ $kategori->slug }}" class="btn btn-dark">Open Now</a>
  </div>
</div>
</center>
@endforeach
<h2 style="padding-bottom: 20px"></h2>
@endsection