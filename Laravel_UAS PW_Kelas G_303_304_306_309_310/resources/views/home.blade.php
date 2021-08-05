@extends('master')
@section('title', 'Home')
@section('body')
<div class="jumbotron">
        <center>
            <h2>
                Selamat Datang di Website Resmi <br>
                SMA Negeri Tetangga 45
            </h2>
            <p>Sekolah dengan murid terbanyak se-Indonesia dan pembelejaran ter-update serta teraktual</p><br/><br/>
            <p><a class="btn btn-dark btn-lg" href="profile" role="button">Mulai Tahu Sejarah Kuy!</a></p>
        </center>
    </div>
    <div class="container post" style="margin-top: 20px; margin-bottom: 20px;">
      <h3 style="margin-bottom: 20px;">Kesiswaan dan Organisasi</h3>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/osis.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Organisasi Siswa Intra Sekolah</h5>
                  <p class="card-text">Organisasi Intra Sekolah SMA Negeri Tetangga 45 menjadi wadah wadah organisasi siswa di sekolah untuk mencapai tujuan pembinaan . . .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-secondary" href="osis" role="button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/pramuka.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Pramuka</h5>
                  <p class="card-text">Gerakan Pramuka adalah gerakan pendidikan kaum muda yang menyelenggarakan kepramukaan dengan dukungan dan bimbingan anggota . . .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-secondary" href="pramuka" role="button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/pmr.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Palang Merah Remaja</h5>
                  <p class="card-text">Ekstrakurikuler Palang Merah Remaja (PMR) merupakan salah satu ekstrakurikuler yang bergerak dibidang kepalangmerahan dimana ekstrakurikuler . . .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-secondary" href="pmr" role="button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/silat.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Beladiri</h5>
                  <p class="card-text">Ekstrakurikuler pencak silat adalah salah satu sarana dalam Pendidikan karakter yang mengarahkan siswa untuk mengembangkan potensi, minat. . .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-secondary" href="beladiri" role="button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/musik.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Musik</h5>
                  <p class="card-text">Peserta didik yang memiliki minat dan bakat pada musik dapat mengikuti ekstrakulikuler ini. Dengan pilihan seni musik antara lain band . . .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-secondary" href="musik" role="button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/kti.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Karya Tulis Ilmiah</h5>
                  <p class="card-text">Salah satu dari kegiatan ekstrakurikuler yang bisa diikuti adalah KTI (Karya Tulis Ilmiah).KTI buat sebagian orang adalah hal yang sangat menyenangkan. . . </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-secondary" href="kti" role="button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div style="margin-right: 50px; margin-left: 50px" id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/PHBN_2019.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/qurban.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/pramuka.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/silat.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/pmr.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
@endsection