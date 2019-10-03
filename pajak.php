<?php

class Pajak {
    public $jenis_pajak;
    public $kode_pajak;
    public $nilai_pajak;
    public $nama_pegawai;
    public $nip;

    public function GetPajak(){
        return "$this->jenis_pajak" . ", " . "KODE PAJAK :" . "$this->kode_pajak";
    }
}

$pajak1 = new Pajak();
$pajak1-> jenis_pajak = "PAJAK BUMI DAN BANGUNAN";
$pajak1-> kode_pajak = "001";
$pajak1-> nilai_pajak = 10;
$pajak1-> nama_pegawai = "Wirahadi Gagah";
$pajak1-> nip = "12345";

$pajak2 = new Pajak();
$pajak2 -> jenis_pajak = "PAJAK HOTEL RESTORAN";
$pajak2 -> kode_pajak = "002";
$pajak2 -> nilai_pajak = 10;
$pajak2 -> nama_pegawai = "rian";
$pajak2 -> nip = "123";


echo "JENIS PAJAK : " . $pajak1 -> GetPajak();
echo "<br>";
echo "JENIS PAJAK : " . $pajak2 -> GetPajak();
