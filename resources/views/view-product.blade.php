<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/view-product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="nav-container">
        <a href="#" class="logo"><img src="img/logo.png" alt="" ></a>
        <ul>
            <li><a href="#">Phone</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Tentang</a></li>
        </ul>

        <form action="/search" method="get">
            <input type="text" name="query" placeholder="Cari produk">
        </form>

        <a href="#" class="acc-a"><img src="img/user.svg" alt="" class="account"></a>
        
    </section>

    <section class="content-review">
        <div class="content">
            <img src="img/hp1 2.svg" alt="">
            <h1>Judul Product</h1>
            <h3>Harga Product</h3>
        </div>
    </section>

    <section class="produk-serupa">
        <h2>Produk Serupa</h2>
        <div class="grid-container">
            <div class="items-grid">
                <img src="img/hp2-removebg-preview.png" alt="Phone-image">
                <h3>Merk Smartphone</h3>
                <h4>harga</h4>
                <button>Selebihnya</button>
              </div>
              <div class="items-grid">
                <img src="img/hp2-removebg-preview.png" alt="Phone-image">
                <h3>Merk Smartphone</h3>
                <h4>harga</h4>
                <button>Selebihnya</button>
              </div>
              <div class="items-grid">
                <img src="img/hp2-removebg-preview.png" alt="Phone-image">
                <h3>Merk Smartphone</h3>
                <h4>harga</h4>
                <button>Selebihnya</button>
              </div>
              <div class="items-grid">
                <img src="img/hp2-removebg-preview.png" alt="Phone-image">
                <h3>Merk Smartphone</h3>
                <h4>harga</h4>
                <button>Selebihnya</button>
              </div>
              <div class="items-grid">
                <img src="img/hp2-removebg-preview.png" alt="Phone-image">
                <h3>Merk Smartphone</h3>
                <h4>harga</h4>
                <button>Selebihnya</button>
              </div>
        </div>
        
    </section>

    <section class="footer">
        <footer>
            <div class="email-section">
                <h2>Don't Miss Anything!</h2>
                <form action="proses.php" method="POST" class="email-form">
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                    <button type="submit">Subscribe Now</button>
                  </form>
                  <form action="proses.php" class="agreement">
                    <input type="checkbox" >
                    <h5>I agree to receive product information and special promotional offers by email from Cget, and I confirm that I am 16 years of age or older.</h5>
                  </form>
            </div>
       
            <div class="footer-class">
                <img src="img/logo.png" alt="logo">
                <ul>
                    <li><a href="#"><h5>Cyget</h5></a></li>
                    <li><a href="#"><h5>Home</h5></a></li>
                    <li><a href="#"><h5>Tentang</h5></a></li>
                </ul>
                <ul>
                    <li><a href="#"><h5>Berita</h5></a></li>
                    <li><a href="#"><h5>Phone</h5></a></li>
                    <li><a href="#"><h5>Laptop</h5></a></li>
                </ul>
                <h4>Join our newsletter</h4>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <button type="submit">submit</button>
                <div class="watermark">
                    <h4>© 2023 Cget. All rights reserved.</h4>
                </div>
                
            </div>
    </footer>
    </section>
</body>
</html>