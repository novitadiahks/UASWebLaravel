@extends('master')
@section('title', 'PPDB')
@section('body')
<form action="/ppdb/store" method="POST" style="padding: 10px 100px;">
@csrf
<h3 style="text-align: center; margin-bottom: 15px">Form Pendaftaran PPDB</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="ttl1">Tempat Lahir</label>
      <input type="text" class="form-control" id="ttl1" name="ttl1" required>
    </div>
    <div class="form-group col-md-6">
      <label for="ttl2">Tanggal Lahir</label>
      <input type="date" class="form-control" id="ttl2" name="ttl2" required>
    </div>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat Rumah</label>
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat, Kel/Kec, Kota/Kab, Provinsi" required>
  </div>
  <div class="form-group">
    <label for="asalSekolah">Asal Sekolah</label>
    <input type="text" class="form-control" id="asalSekolah" name="asalSekolah" placeholder="Contoh: SMP Negeri Seberang 02 Los Angels" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nisn">NISN</label>
      <input type="text" class="form-control" id="nisn" name="nisn" required>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah data yang anda masukkan sudah benar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Ya dan Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

@endsection