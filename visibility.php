<?php
/*
Jagaddhita Arya Koswara
193040098
https://github.com/jagaddhitaaryak/prakweb2021_oophp_193040098.git
Pertemuan 2 - 16 September 2021
Mempelajari tentang Overriding
*/
?>

<?php

Class Produk{
    public $judul,
           $penulis,
           $penerbit;
        
    protected $diskon = 0;

    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", 
        $penerbit = "penerbit", $harga = 0) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0) {

        parent::__construct( $judul, $penulis, $penerbit , $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
    $str = "Komik : " . parent:: getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktuMain = 0){
       
        parent::__construct( $judul, $penulis, $penerbit , $harga);

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk(){
    $str = "Game : " . parent:: getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
    }
}



class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("Call Of Dutty", "Steven Auxi", "Sony Computer", 550000, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();


?>