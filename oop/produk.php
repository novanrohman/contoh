<?php 
//Tag pembuka php
//Program daftar produk

//Class
class Produk{
    //Property
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    // method
    public function selesai(){
        return "Selesai dibaca";
    }
}

// Jangan lupa titik koma (;)

// Object 1
$produk1 = new Produk();
$produk1->judul = "Belajar OOP";
$produk1->penulis = "Lukman";
$produk1->harga = 20000 + 2000*0.11;
//discount harga awal - harga awal*discount
// discount = 0.5

// Object 2
$produk2 = new Produk();

// var_dump: digunakan untuk cek atau debug program
var_dump($produk1);
var_dump($produk2);

//Tag penutup php
?>
