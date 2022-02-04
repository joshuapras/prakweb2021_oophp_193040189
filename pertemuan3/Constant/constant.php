<?php
/*
Joshua Praisyatama
193040189
https://github.com/joshuapras/prakweb2021_oophp_193040189
Pertemuan 3 -  Januari 2022
Membuat sebuah identifier untuk menyimpan nilai yang tidak dapat berubahs
*/
?>

<?php

//define('NAMA', 'Joshua Praisyatama');
//echo NAMA;
//echo "<br>";

//const UMUR = 25;
//echo UMUR;



//class Coba {
//    const NAMA = 'Joshua';
//}

//echo Coba::NAMA;


//echo __FILE__;


//function coba() {
//    return __FUNCTION__;
//}

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



?>