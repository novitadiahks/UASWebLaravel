@extends('kesiswaan.kesiswaan')

{{-- @section('link')
    <style>
        #more {display: none;}
    </style>
@endsection --}}

@section('title')
    Organisasi Intra Sekolah
@endsection

@section('konten')
    <div class="container">
        <h3 class="text-center" style="margin-bottom: 20px">Organisasi Siswa Intra Sekolah</h3>
        <p class="text-justify">
            Organisasi Intra Sekolah SMA Negeri Tetangga 45 menjadi wadah wadah organisasi siswa di sekolah untuk mencapai tujuan pembinaan dan pengembangan kesiswaan. Bertujuan mempersiapkan siswa sebagai kader penerus cita-cita perjuangan bangsa dan sumber insani pembangunan nasional.
            OSIS berperan mewujudkan tujuan nasional Indonesia, seperti yang tercantum pada Pembukaan Undang-undang Dasar 1945, adalah melindungi segenap Bangsa Indonesia dan seluruh tumpah darah Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, dan ikut melaksanakan ketertiban dunia yang berdasarkan kemerdekaan, perdamaian abadi dan keadilan sosial. Dan secara operasional diatur melalui Undang-Undang Nomor 20 tahun 2003 tentang Sistem Pendidikan Nasional.
        </p>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">Struktur Kepengurusan</th>
                <th scope="col" class="text-center">Nama Pengurus</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Pembina OSIS</th>
                    <td>Drs. Sulam</td>
                </tr>
                <tr>
                    <th>Ketua OSIS</th>
                    <td>Mark</td>
                </tr>
                <tr>
                    <th>Wakil Ketua OSIS</th>
                    <td>Jacob</td>
                </tr>
                <tr>
                    <th>
                        Sekretaris 1 <br>
                        Sekretaris 2
                    </th>
                    <td>
                        Jack <br>
                        Ellena
                    </td>
                  </tr>
                <tr>
                    <th>
                        Bendahara 1 <br>
                        Bendahara 2
                    </th>
                    <td>
                        Jack <br>
                        Ellena
                    </td>
                </tr>
                <tr>
                    <th>Seksi Bidang 1 - Keagamaan</th>
                    <td>
                        Jacob <br>
                        Toni <br>
                        Andre
                    </td>
                </tr>
                <tr>
                    <th>Seksi Bidang 2 - Budi Pekerti</th>
                    <td>
                        Jacob <br>
                        Toni <br>
                        Andre
                    </td>
                </tr>
            </tbody>
          </table>

          {{-- <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col" class="text-center">Informasi Seputar OSIS SMA Negeri Tetangga 45</th>
                </tr>
              </thead>    
          </table>          

          <div>
              <h4>
                Pentas Seni 2019
              </h4>
              <p class="text-left">21 Mei 2019</p>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
               
                <button class="btn btn-primary" onclick="myFunction()" id="myBtn">Read more</button>
            </div>
            <hr>

            <div>
                <h4>
                  Pentas Seni 2019
                </h4>
                <p class="text-left">21 Mei 2019</p>
                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                 
                  <button class="btn btn-primary" onclick="myFunction()" id="myBtn">Read more</button>
              </div>
    </div>

    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script> --}}
@endsection