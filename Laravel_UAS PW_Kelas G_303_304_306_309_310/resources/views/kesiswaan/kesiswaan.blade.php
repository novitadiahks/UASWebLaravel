@extends('master')

@section('title')
    Kesiswaan dan Organisasi
@endsection

@section('body')
    <div class="container" style="margin-top: 50px;">
        <a class="btn btn-primary" href="osis" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/osis.png" alt="osis" style="width: 50px; height: 50px; margin-top: 10px">
            <h4>Organisasi Siswa Intra Sekolah</h4>
        </a>
        <a class="btn btn-success" href="pramuka" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/pramuka.png" alt="" style="width: 50px; height: 50px; margin-top: 20px">
            <h4>Pramuka</h4>
        </a>
        <a class="btn btn-secondary" href="pmr" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/pmr.png" alt="" style="width: 50px; height: 50px; margin-top: 20px">
            <h4 style="margin-top: 1px;">Palang Merah Remaja</h4>
        </a>
        <a class="btn btn-info" href="koperasi" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/koperasi.png" alt="" style="width: 50px; height: 50px; margin-top: 20px">
            <h4 style="margin-top: 5px;">Koperasi Sekolah</h4>
        </a>
        <a class="btn btn-primary" href="beladiri" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/beladiri.png" alt="" style="width: 50px; height: 50px; margin-top: 20px">
            <h4 style="margin-top: 5px;">Beladiri</h4>
        </a>
        <a class="btn btn-success" href="musik" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/musik.png" alt="" style="width: 50px; height: 50px; margin-top: 20px">
            <h4 style="margin-top: 5px;">Musik</h4>
        </a>
        <a class="btn btn-secondary" href="kti" role="button" style="height: 150px; width: 250px; margin-right: 20px; margin-bottom: 50px">
            <img src="kesiswaan-img/kti.png" alt="" style="width: 50px; height: 50px; margin-top: 20px">
            <h4 style="margin-top: 5px;">Karya Tulis Ilmiah</h4>
        </a>
    </div> 

    <div>
        @yield('konten')
    </div>
@endsection
