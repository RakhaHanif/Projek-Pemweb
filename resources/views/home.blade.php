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
<div id="carouselExample" class="carousel slide mt-5">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/jumbotron.png" class="d-block w-200" />
      <div style="position: relative; color: white; top: -270px; left: 50px">
        <h1>
          Temukan Gadget sesuai <br />
          Kebutuhanmu
        </h1>
        <p>Sesuaikan Preferensi dan Budget Anda</p>
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron Akhir -->

<!-- Filtrasi Awal -->
<div class="container mb-5">
  <div class="d-flex justify-content-center mb-5">
    <div class="">
      <div class="box" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px"><a href="#" onclick="filterProducts('all')">All</a></div>
    </div>
    <div class="">
      <div class="box" style="background: rgba(33, 48, 64, 1); color: rgba(130, 193, 233, 1)"><a href="#" onclick="filterProducts('newest')">Newest</a></div>
    </div>
    <div class="">
      <div class="box" style="background: rgba(33, 48, 64, 1); color: rgba(130, 193, 233, 1)"><a href="#" onclick="filterProducts('high-price')">High Price</a></div>
    </div>
    <div class="">
      <div class="box" style="background: rgba(33, 48, 64, 1); color: rgba(130, 193, 233, 1); border-top-right-radius: 15px; border-bottom-right-radius: 15px"><a href="#" onclick="filterProducts('popular')">Popular</a></div>
    </div>
  </div>
  <!-- Filtrasi Akhir -->

  <!-- Main -->
  <main>

    <div class="d-flex justify-content-center mt-5">
      <h1 class="text-white">Phone</h1>
    </div>

    <div class="d-flex justify-content-evenly my-5">
      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/hp1.png" class="card-img-top img-fluid" alt="Motorola Edge+ (2023)" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">Motorola Edge+ (2023)</h5>
          <a href="/view" class="btn btn-white">Selebihnya</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/hp2.png" class="card-img-top img-fluid" alt="Iphone 14" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">Iphone 14</h5>
          <a href="#" class="btn btn-white">Selebihnya</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/hp3.png" class="card-img-top img-fluid" alt="Samsung Galaxy S23 Ultra" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">Samsung Galaxy S23 Ultra</h5>
          <a href="#" class="btn btn-white">Selebihnya</a>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <h1 class="text-white">Laptops</h1>
    </div>

    <div class="d-flex justify-content-evenly mt-5">
      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/laptop1.png" class="card-img-top img-fluid" alt="Motorola Edge+ (2023)" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">Macbook Air Chip M1</h5>
          <a href="#" class="btn btn-white">Selebihnya</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/laptop2.png" class="card-img-top img-fluid" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">Macbook Air Chip M2</h5>
          <a href="#" class="btn btn-white">Selebihnya</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/laptop3.png" class="card-img-top img-fluid" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">msi GS66 Stealth</h5>
          <a href="#" class="btn btn-white">Selebihnya</a>
        </div>
      </div>
    </div>
    {{-- batas akhir produk --}}
  </main>
  <!-- Main Akhir -->

  <!-- Section Needhelp  Awal-->
  <div class="card p-5 m-5" style="border-radius: 15px; background: linear-gradient(180deg, #82c1e9 0%, rgba(143, 142, 222, 0.46) 100%)">
    <div class="d-flex flex-column justify-content-center">
      <div class="text-center text-white">
        <h1 style="font-size: 4rem">Butuh Bantuan?</h1>
        <p>Percayakan kebutuhanmu pada pilihan kami</p>
        <br />
        <div class="btn" style="background-color: black; color: white; border-radius: 50px; padding-left: 100px; padding-right: 100px; padding-top: 20px; padding-bottom: 20px">Mulai</div>
      </div>
    </div>
  </div>
</div>
<!-- Section Needhelp Akhir -->

<!-- Footer Awal -->
<div style="color: white; background: rgba(12, 31, 50, 1); padding: 50px; min-height: 50vh; display: flex; align-items: center; justify-content: center">
  <div class="text-center">
    <h1>Don’t miss anything!</h1>
    <br />
    <form class="d-flex justify-content-center">
      <input
        style="position: relative; right: -80px; border-radius: 20px; height: 45px; background: transparent; color: white"
        class="form-control btn-outline w-100"
        type="search"
        placeholder="Search"
        aria-label="Search"
        value="Email Address"
      />
      <button style="width: 200px; background-color: red; position: relative; top: -17px; left: -50px" class="btn btn-white" type="submit">Subscribe Now</button>
    </form>
    <div class="d-flex" style="max-width: 700px">
      <input type="checkbox" style="width: 20px !important" />
      <p>I agree to receive product information and special promotional offers by email from Motorola, and I confirm that I am 16 years of age or older.</p>
    </div>
  </div>
</div>

<div class="mb-5"></div>

<div class="container text-white">
  <footer class="py-5 text-white">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>CGET</h5>
        <ul class="nav flex-column text-white"></ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Cyget</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Product</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Phone</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Laptops</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Join our newsletter</h5>
          <br />
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address" />
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2023 Cget. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3">
          <a class="link-body-emphasis" href="#"
            ><svg class="bi" width="24" height="24"><use xlink:href="#twitter" /></svg>
          </a>
        </li>
        <li class="ms-3">
          <a class="link-body-emphasis" href="#"
            ><svg class="bi" width="24" height="24"><use xlink:href="#instagram" /></svg>
          </a>
        </li>
        <li class="ms-3">
          <a class="link-body-emphasis" href="#"
            ><svg class="bi" width="24" height="24"><use xlink:href="#facebook" /></svg>
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- Footer Akhir -->
</div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection
