<?php
/*
Joshua Praisyatama
193040189
https://github.com/joshuapras/prakweb2021_oophp_193040189
Pertemuan 3 -  Januari 2022
Membuat Class dan Object
*/
?>
<?php

//  class ContohStatic {
//    public static $angka = 1;

//    public static function halo() {
//        return "Halo " . self::$angka++ . " kali.";
//    }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

?>