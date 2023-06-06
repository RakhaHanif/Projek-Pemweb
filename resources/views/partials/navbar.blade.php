@extends('layouts.main')
@section('container')

<nav class="navbar navbar-expand-lg text-white">
  <div class="container d-flex gap-5">
    <a class="navbar-brand" href="/" style="color: white !important">CGET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phone">Phone</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laptops">Laptops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tentang">Tentang</a>
        </li>
      </ul>
      <span class="navbar-text d-flex gap-3">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        </form>

        <i class="fas fa-user fa-2x"></i>
      </span>
    </div>
  </div>
</nav>
<!-- Navbar Akhir -->

<!-- Jumbotron Awal -->

    
@endsection