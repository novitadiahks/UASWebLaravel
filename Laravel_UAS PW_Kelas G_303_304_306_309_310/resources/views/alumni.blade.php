@extends('master')
@section('title', 'Data Alumni')
@section('body')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="/guru">Guru</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/alumni">Alumni</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h3 class="card-title">Data Alumni</h3>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Angkatan</th>
          <th scope="col">Universitas</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        @foreach (App\alumni::all() as $alumni)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $alumni->nama }}</td>
          <td>{{ $alumni->angkatan }}</td>
          <td>{{ $alumni->universitas }}</td>
          <td>{{ $alumni->jurusan }}</td>
          <td>{{ $alumni->keterangan }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection