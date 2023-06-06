@extends('layouts.main')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/product-page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg text-white">
  <section class="nav-container">
        <a href="/" class="logo"><img src="img/logo.png" alt="" ></a>
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
  </nav>

    <section class="header-judul">
      <div class="container">
        <h1>Temukan Gadget Sesuai Kebutuhanmu</h1>

        <div class="content">
          {{-- <img src="img/bg1.svg" alt="" class="background-image"> --}}
          <ul class="filter-list"></ul>
          <div class="tags">
            <!-- 3 Tag di atas -->
            <ul class="filter-list">
              <li>
                <input type="checkbox" class="filter-checkbox" data-filter="tag1" id="tag1">
                <label for="tag1" class="filter-label">Komunikasi</label>
              </li>
              <li>
                <input type="checkbox" class="filter-checkbox" data-filter="tag2" id="tag2">
                <label for="tag2" class="filter-label">Hiburan</label>
              </li>
              <li>
                <input type="checkbox" class="filter-checkbox" data-filter="tag3" id="tag3">
                <label for="tag3" class="filter-label">Fotografi</label>
              </li>
            </ul>

          </div>
          <div class="tags">
            <!-- 2 Tag di bawah -->
            <ul class="filter-list">
              <li>
                <input type="checkbox" class="filter-checkbox" data-filter="tag4" id="tag4">
                <label for="tag4" class="filter-label">Desain</label>
              </li>
              <li>
                <input type="checkbox" class="filter-checkbox" data-filter="tag5" id="tag5">
                <label for="tag5" class="filter-label">Gaming</label>
              </li>
            </ul>

          </div>
          </ul>
        </div>

      </div>
    </section>

    <section class="second-tags">
      <div class="container-second-tags">
        <ul class="content-second-tags"></ul>
        <div class="tags">
          <!-- 3 Tag di atas -->
          <ul class="filter-list">
            <li>
              <input type="checkbox" class="filter-checkbox" data-filter="tag1" id="tag1">
              <label for="tag1" class="filter-label-2">Terbaru</label>
            </li>
            <li>
              <input type="checkbox" class="filter-checkbox" data-filter="tag2" id="tag2">
              <label for="tag2" class="filter-label-2">Terlaris</label>
            </li>
            <li>
              <input type="checkbox" class="filter-checkbox" data-filter="tag3" id="tag3">
              <button id="toggleButton">Harga</button>
              <ul id="featureList" style="display: none;">
                <li>Dari Terendah</li>
                <li>Dari Tertinggi</li>
              </ul>



            </li>
          </ul>

        </div>
      </div>
    </section>


    <section class="grid">
        <div class="grid-container">
          <div class="items-grid">
            <img src="img/hp2-removebg-preview.png" alt="Phone-image">
            @foreach ($post as $phone )
            <h1>{{ $phone["nama_produk"] }}</h1>
            <h3>{{ $phone["harga"] }}</h3>
            @endforeach
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
        <div class="button-review">
          <button><img src="img/chevron-right.svg" alt=""></button>
        </div>
    </section>


    <section class="Pagination">
      <div id="paginationContainer">
        <button class="page">1</button>
        <button class="page">2</button>
        <button class="page">3</button>
        <button class="page">4</button>
        <button class="page">selanjutnya</button>
      </div>
    </section>


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




























    <script>
        const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
        const filterLabels = document.querySelectorAll('.filter-label');
        const items = document.querySelectorAll('.item');

        filterCheckboxes.forEach(checkbox => {
          checkbox.addEventListener('change', () => {
            const checkedFilters = Array.from(document.querySelectorAll('.filter-checkbox:checked'))
              .map(checkbox => checkbox.getAttribute('data-filter'));

            filterItems(checkedFilters);
          });
        });

        function filterItems(checkedFilters) {
          items.forEach(item => {
            const tags = item.getAttribute('data-tags').split(' ');
            const matches = checkedFilters.every(filter => tags.includes(filter));

            if (matches) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        }

        filterLabels.forEach(label => {
  label.addEventListener('click', () => {
    const checkbox = label.previousElementSibling;
    checkbox.checked = !checkbox.checked;
    checkbox.dispatchEvent(new Event('change'));
    toggleTagBackground(checkbox);
  });

  const cancelBtn = document.createElement('span');
  cancelBtn.innerHTML = '&times;';
  cancelBtn.classList.add('cancel-btn');
  label.appendChild(cancelBtn);
});

function toggleTagBackground(checkbox) {
  const label = checkbox.nextElementSibling;
  if (checkbox.checked) {
    label.classList.add('tag-selected');
    label.querySelector('.cancel-btn').style.display = 'inline-block';
  } else {
    label.classList.remove('tag-selected');
    label.querySelector('.cancel-btn').style.display = 'none';
  }
}

const cancelButtons = document.querySelectorAll('.cancel-btn');
cancelButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    event.stopPropagation();
    const cancelBtn = event.target;
    const label = cancelBtn.parentElement;
    const checkbox = label.previousElementSibling;
    checkbox.checked = false;
    checkbox.dispatchEvent(new Event('change'));
    toggleTagBackground(checkbox);
  });
});


// ===========================================================================

// fitur harga

document.getElementById('toggleButton').addEventListener('mouseover', function() {
  document.getElementById('featureList').style.display = 'block';
});

document.getElementById('toggleButton').addEventListener('mouseout', function() {
  document.getElementById('featureList').style.display = 'none';
});

// ========================================================================================
// pagination

// Sample data array
const data = [/* Your data here */];

// Number of items per page
const itemsPerPage = 9;

// Current page
let currentPage = 1;

// Function to generate grid based on current page
function generateGrid() {
  const gridContainer = document.getElementById('grid-container');
  gridContainer.innerHTML = '';

  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  for (let i = startIndex; i < endIndex; i++) {
    if (data[i]) {
      // Create grid item and append it to the grid container
      const gridItem = document.createElement('div');
      gridItem.textContent = data[i];
      gridContainer.appendChild(gridItem);
    }
  }
}

// Function to generate pagination buttons
function generatePagination() {
  const paginationContainer = document.getElementById('paginationContainer');
  paginationContainer.innerHTML = '';

  const totalPages = Math.ceil(data.length / itemsPerPage);

  for (let i = 1; i <= totalPages; i++) {
    // Create pagination button
    const pageButton = document.createElement('button');
    pageButton.textContent = i;
    pageButton.addEventListener('click', () => {
      currentPage = i;
      generateGrid();
      generatePagination();
    });

    paginationContainer.appendChild(pageButton);
  }
}

// Initial generation of grid and pagination
generateGrid();
generatePagination();


    </script>
</body>
</html>
@endsection