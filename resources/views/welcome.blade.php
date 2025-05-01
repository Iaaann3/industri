<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Judul Halaman')</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/admin/css/style.css') }}">
</head>
<body>

    {{-- Navbar, Sidebar, dsb --}}
    @include('layouts.part.navbar')
   

    <!-- {{-- Isi halaman --}}
    <div class="main-content">
        @yield('content')
    </div> -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner mb-4">
    <div class="carousel-item active">
      <img src="{{ asset('/admin/img/areioutdoorgear_20250227_67bfdec6d4d6b.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/admin/img/areioutdoorgear_20250227_67bfdecf30bde.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/admin/img/Banner-MObil-JeepArtboard-1-copy-6_result.webp') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{ asset('/admin/img/berita.jpeg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ASN Pendaki Merbabu yang Dikabarkan Hilang, Sudah Sepekan Tewas Saat Ditemukan</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('/admin/img/berita.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">ASN Pendaki Merbabu yang Dikabarkan Hilang, Sudah Sepekan Tewas Saat Ditemukan</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('/admin/img/berita.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">ASN Pendaki Merbabu yang Dikabarkan Hilang, Sudah Sepekan Tewas Saat Ditemukan</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

    <!-- JS -->
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your Custom JS -->
<script src="{{ asset('/admin/js/custom.js') }}"></script>
</body>
</html>
