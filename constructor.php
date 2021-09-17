<?php

Class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 300000);
$produk2 = new Produk("Call Of Dutty", "Steven Auxi", "Sony Computer", 550000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : "  . $produk2->getLabel();