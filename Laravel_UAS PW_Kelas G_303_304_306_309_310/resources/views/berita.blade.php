@extends('master')
@section('title', 'Berita')
@section('body')
@foreach (App\berita::all() as $berita)
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3 style="text-align: center; margin-bottom: 15px">{{ $berita->judul }}</h3>
    <p style="text-align: justify; padding: 10px 50px">{{ $berita->isi }}</p>
    <?php
            date_default_timezone_set('Asia/Jakarta');
            ?>
    <p class="text-muted" style="text-align: center; padding: 10px 50px">{{ \Carbon\Carbon::parse($berita->waktu)->diffForHumans() }}</p>
  </div>
</div>
@endforeach
@endsection