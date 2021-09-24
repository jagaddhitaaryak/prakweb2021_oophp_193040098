 <?php


// class ContohStatic{
//    public static $angka = 1;

//    public static function halo() {
//        return "Hallo " . self::$angka++ . "kali.";
//    }
// }

// echo Contohstatic::$angka;
// echo "<br>";
// echo Contohstatic::halo();
// echo "<hr>";
// echo Contohstatic::halo();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " Kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();






 ?>