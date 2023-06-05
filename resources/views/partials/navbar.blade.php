<nav class="navbar navbar-expand-lg text-white">
  <div class="container d-flex gap-5">
      <a class="navbar-brand" href="/">CGET</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active {{ ($active === "phone") ? 'active' : '' }}"aria-current="page">Phone</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === "laptops") ? 'active' : '' }}">Laptops</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "berita") ? 'active' : '' }}">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "tentang") ? 'active' : '' }}">Tentang</a>
          </li>
          </ul>
          
          <span class="navbar-text d-flex gap-3">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            </form>
          <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i> {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                                @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-person-fill"></i> Login</a>
                </li>
                @endauth
            </ul>
  </div>

  <div id="carouselExample" class="carousel slide mt-5">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/jumbotron.png" class="d-block w-100" />
        <div style="position: relative; color: white; top: -270px; left: 50px">
          <h1>
            Temukan Gadget sesuai <br />
            Kebutuhanmu
          </h1>
          <p>Sesuaikan preferensi dan budget anda</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mb-5">
    <div class="d-flex justify-content-center mb-5">
      <div class="">
        <div class="box" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">Newest</div>
      </div>
      <div class="">
        <div class="box" style="background: rgba(33, 48, 64, 1); color: rgba(130, 193, 233, 1)">Best Seller</div>
      </div>
      <div class="">
        <div class="box" style="background: rgba(33, 48, 64, 1); color: rgba(130, 193, 233, 1); border-top-right-radius: 15px; border-bottom-right-radius: 15px">Recommendation</div>
      </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <h1 class="text-white">Phone</h1>
    </div>

    <div class="d-flex justify-content-evenly my-5">
      <div class="card" style="width: 18rem; background: linear-gradient(0deg, #0b1e32, #0b1e32), linear-gradient(0deg, #213040, #213040)">
        <img src="img/hp1.png" class="card-img-top img-fluid" alt="Motorola Edge+ (2023)" />
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title text-white text-center">Motorola Edge+ (2023)</h5>
          <a href="#" class="btn btn-white">Selebihnya</a>
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
              ><svg class="bi" width="24" height="24"><use xlink:href="#twitter" /></svg
            ></a>
          </li>
          <li class="ms-3">
            <a class="link-body-emphasis" href="#"
              ><svg class="bi" width="24" height="24"><use xlink:href="#instagram" /></svg
            ></a>
          </li>
          <li class="ms-3">
            <a class="link-body-emphasis" href="#"
              ><svg class="bi" width="24" height="24"><use xlink:href="#facebook" /></svg
            ></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
</nav>