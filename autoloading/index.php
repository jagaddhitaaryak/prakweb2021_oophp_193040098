<?php

require_once'app/init.php';

$produk1 = new Komik("Naruto Uzumaki", "Mashasi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("Call Of Dutty", "Steven Auxi", "Sony Computer", 550000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();