<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});




Route::get('/phone', function() {
    $blog_phone =[
            [
                "gambar" => "img/hp2-removebg-preview.png",
                "nama_produk" => "Samsung",
                "slug" => 'hp-satu',
                "harga" => "Rp 12.000"
            ],
            [
                "gambar" => "img/camera.png",
                "nama_produk" => "Oppo",
                "slug" => 'hp-dua',
                "harga" => "Rp 15.000"
            ]
        ];

    return view('phone', [
        'title' => 'Phone',
        'active' => 'phone',
        'post' => $blog_phone
    ]);
});
Route::get('/laptops', function() {
    return view('laptops', [
        'title' => 'Laptops',
        'active' => 'laptops',
    ]);
});
Route::get('/berita', function() {
    return view('berita', [
        'title' => 'Berita',
        'active' => 'berita',
    ]);
});
Route::get('/tentang', function() {
    return view('tentang', [
        'title' => 'Tentang',
        'active' => 'tentang',
    ]);
});
Route::get('/view', function() {
    return view('view-product', [
        'title' => 'View',
        'active' => 'view',
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\LoginController::class,'loginForm']);
    Route::get('/login',[Admin\Auth\LoginController::class,'loginForm']) -> name ('admin.login');
    Route::post('/login',[Admin\Auth\LoginController::class,'login']) -> name ('admin.login');
    Route::get('/home',[Admin\HomeController::class,'index']) -> name ('admin.home');
    Route::get('/logout',[Admin\Auth\LoginController::class,'logout']) -> name ('admin.logout');
});

    

Route::get('view/{slug}', function ($slug){
    $blog_phone =[
        [
            "gambar" => "img/hp2-removebg-preview.png",
            "nama_produk" => "Samsung",
            "slug" => 'hp-satu',
            "harga" => "Rp 12.000"
        ],
        [
            "gambar" => "img/camera.png",
            "nama_produk" => "Oppo",
            "slug" => 'hp-dua',
            "harga" => "Rp 15.000"
        ]
    ];

    $new_phone=[];
    foreach($blog_phone as $phone){
        if($phone["slug"] === $slug){
            $new_phone = $phone;
        }
    }

    return view('detail',[
        "title" => "Single Post",
        "phone" =>  $new_phone
]);
});
