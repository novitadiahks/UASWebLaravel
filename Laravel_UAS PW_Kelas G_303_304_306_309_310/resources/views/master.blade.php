<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
    @yield('link')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    @yield('script')

    <title>@yield('title')</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
    <center><a class="navbar-brand" href="home">
            <h1><img src="a.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
                SMA NEGERI TETANGGA 45</h1>
        </a></center>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="{{ request()->is('/', 'home') ? 'navbar-brand' : 'nav-link'}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('profile') ? 'navbar-brand' : 'nav-link'}}" href="/profile">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="{{ request()->is('guru', 'alumni') ? 'navbar-brand' : 'nav-link'}}" href="/guru">Humas</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('ppdb') ? 'navbar-brand' : 'nav-link'}}" href="/ppdb">PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('kesiswaan', 'osis', 'pramuka', 'pmr', 'koperasi', 'beladiri', 'musik', 'kti') ? 'navbar-brand' : 'nav-link'}}" href="/kesiswaan">Kesiswaaan dan Organisasi</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('berita') ? 'navbar-brand' : 'nav-link'}}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('gallery') ? 'navbar-brand' : 'nav-link'}}" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('kontak') ? 'navbar-brand' : 'nav-link'}}" href="/kontak">Hubungi Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('name')}}</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    @if(\Session::has('alert'))
    <div class="alert alert-danger">
        <div>{{Session::get('alert')}}</div>
    </div>
    @endif
    @if(\Session::has('alert-success'))
    <div class="alert alert-success">
        <div>{{Session::get('alert-success')}}</div>
    </div>
    @endif
    @yield('body')



</body>

<footer style="margin-top: 50px;">
    <div class="card text-center">
        <div class="card-header">
            <h4>Alamat</h4>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>SMA Negeri Tetangga 45</p>
                <footer class="blockquote-footer">Jl. Raya SWBR No.62 Kota X Provinsi Z</footer>
            </blockquote>
        </div>
    </div>
</footer>

</html>