// Data produk
var products = [
  {
    type: "phone",
    name: "Motorola Edge+ (2023)",
    image: "img/hp1.png",
    price: 12000000,
    popularity: 5,
  },
  {
    type: "phone",
    name: "Iphone 14",
    image: "img/hp2.png",
    price: 15000000,
    popularity: 4,
  },
  {
    type: "phone",
    name: "Samsung Galaxy S23 Ultra",
    image: "img/hp3.png",
    price: 14000000,
    popularity: 3,
  },
  {
    type: "laptop",
    name: "Macbook Air Chip M1",
    image: "img/laptop1.png",
    price: 20000000,
    popularity: 4,
  },
  {
    type: "laptop",
    name: "Macbook Air Chip M2",
    image: "img/laptop2.png",
    price: 22000000,
    popularity: 5,
  },
  {
    type: "laptop",
    name: "msi GS66 Stealth",
    image: "img/laptop3.png",
    price: 18000000,
    popularity: 3,
  },
  {
    type: "laptop",
    name: "Ntah Apalah",
    image: "",
    price: 180000,
    popularity: 5,
  },
];

// Fungsi untuk menampilkan produk
function displayProducts(products) {
  var productsContainer = document.getElementById("products-container");
  productsContainer.innerHTML = "";

  products.forEach(function (product) {
    var productElement = document.createElement("div");
    productElement.classList.add("card", "card1");

    var imageElement = document.createElement("img");
    imageElement.classList.add("card-img-top");
    imageElement.src = product.image;
    imageElement.alt = product.name;

    var cardBodyElement = document.createElement("div");
    cardBodyElement.classList.add("card-body", "d-flex", "my-5", "justify-content-evenly");

    var titleElement = document.createElement("h5");
    titleElement.classList.add("card-title", "text-white", "text-center");
    titleElement.textContent = product.name;

    var buttonElement = document.createElement("a");
    buttonElement.classList.add("btn", "btn-white");
    buttonElement.href = "#";
    buttonElement.textContent = "Selebihnya";

    cardBodyElement.appendChild(titleElement);
    cardBodyElement.appendChild(buttonElement);

    productElement.appendChild(imageElement);
    productElement.appendChild(cardBodyElement);

    productsContainer.appendChild(productElement);
  });
}

// Fungsi untuk memfilter dan menampilkan produk sesuai kriteria
function filterProducts(filter) {
  var filteredProducts = [];

  if (filter === "all") {
    filteredProducts = products;
  } else if (filter === "newest") {
    filteredProducts = products.slice().sort(function (a, b) {
      return b.popularity - a.popularity;
    });
  } else if (filter === "high-price") {
    filteredProducts = products.slice().sort(function (a, b) {
      return b.price - a.price;
    });
  } else if (filter === "popular") {
    filteredProducts = products.filter(function (product) {
      return product.popularity > 3;
    });
  }

  displayProducts(filteredProducts);
}

// Memanggil fungsi displayProducts() saat halaman dimuat
window.onload = function () {
  displayProducts(products);
};
