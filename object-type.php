<?php
/*
Jagaddhita Arya Koswara
193040098
https://github.com/jagaddhitaaryak/prakweb2021_oophp_193040098.git
Pertemuan 2 - 16 September 2021
Mempelajari tentang object type
*/
?>

<?php

Class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", 
        $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 300000);
$produk2 = new Produk("Call Of Dutty", "Steven Auxi", "Sony Computer", 550000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : "  . $produk2->getLabel();
echo "<br>";


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>