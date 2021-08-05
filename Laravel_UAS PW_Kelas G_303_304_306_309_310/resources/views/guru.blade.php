@extends('master')
@section('title', 'Data Guru')
@section('body')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/guru">Guru</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/alumni">Alumni</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h3 class="card-title">Data Guru</h3>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">NIP</th>
          <th scope="col">Jabatan</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1 ?>
        @foreach (App\guru::all() as $guru)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $guru->nama }}</td>
          <td>{{ $guru->nip }}</td>
          <td>{{ $guru->jabatan }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection