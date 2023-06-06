<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    static  $blog_phone =[
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

    public static function all()
    {
        return self::$blog_phone;
    }

    public static function find($slug)
    {
        return self::$blog_phone;
    }
}
