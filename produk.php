<?php
/*
Jagaddhita Arya Koswara
193040098
https://github.com/jagaddhitaaryak/prakweb2021_oophp_193040098.git
Pertemuan 2 - 16 September 2021
Mempelajari tentang Property dan MEthod
*/
?>

<?php

Class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 300000;

$produk2 = new Produk();
$produk2->judul = "Call Of Dutty";
$produk2->penulis = "Steven Auxi";
$produk2->penerbit = "Sony Computer";
$produk2->harga = 550000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : "  . $produk2->getLabel();
?>