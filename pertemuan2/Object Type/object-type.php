<?php
/*
Joshua Praisyatama
193040189
https://github.com/joshuapras/prakweb2021_oophp_193040189
Pertemuan 2 -  Januari 2022
Membuat tipe data object dalam suatu kelas
*/
?>

<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
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
    public function cetak ( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shone Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>
