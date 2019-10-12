<?php
class Produk{
    var $judul, $penulis, $harga;

    function Membeli_buku(){
        return "Buku dibeli";
    }
}
$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->harga = 350000;

echo "Judul Buku : $produk1->judul<br>
Penulis Buku : $produk1->penulis<br>
Harga Buku : $produk1->harga<br>
Keterangan : " . $produk1->Membeli_buku() . "<br><br>";

$produk2 = new Produk();
$produk2->judul = "Sponge Bob";
$produk2->penulis = "Stephen Hillenburg";
$produk2->harga = 250000;

echo "Judul Buku : $produk2->judul<br>
Penulis Buku : $produk2->penulis<br>
Harga Buku : $produk2->harga<br>
Keterangan : " . $produk2->Membeli_buku();
?>