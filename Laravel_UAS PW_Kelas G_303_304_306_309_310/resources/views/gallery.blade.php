@extends('master')

@section('link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="bootstrap/css/gallery-grid.css">
@endsection

@section('title')
Gallery
@endsection

@section('body')
<div class="container">
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery-img/qurban.jpg">
                    <img src="gallery-img/qurban.jpg" alt="">
                    <figcaption class="figure-caption" style="text-align: center; margin-bottom: 30px">Idul Adha 1440 H</figcaption>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery-img/upacara bendera.jpg">
                    <img src="gallery-img/upacara bendera.jpg" alt="">
                    <figcaption class="figure-caption" style="text-align: center; margin-bottom: 30px">Upacara Dalam Rangka Memperingati Hari Lahirnya Pancasila</figcaption>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery-img/pentas seni.jpg">
                    <img src="gallery-img/pentas seni.jpg" alt="">
                    <figcaption class="figure-caption" style="text-align: center; margin-bottom: 30px">Pentas Seni 2020</figcaption>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery-img/PHBN 2019.jpg">
                    <img src="gallery-img/PHBN 2019.jpg" alt="">
                    <figcaption class="figure-caption" style="text-align: center; margin-bottom: 30px">PHBN 17 Agustus 2019</figcaption>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery-img/Simulasi-UNBK.jpg">
                    <img src="gallery-img/Simulasi-UNBK.jpg" alt="">
                    <figcaption class="figure-caption" style="text-align: center; margin-bottom: 30px">Simulasi UNBK 2018</figcaption>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery-img/pohon-batang.jpg">
                    <img src="gallery-img/pohon-batang.jpg" alt="">
                    <figcaption class="figure-caption" style="text-align: center; margin-bottom: 30px">Reboisasi Bukit Bersaudara</figcaption>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection