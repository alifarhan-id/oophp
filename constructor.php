<?php

class Pajak {

    //mendefinisikan property
    public $jenis_pajak;
    public $kode_pajak;
    public $nilai_pajak;
    public $nama_pegawai;
    public $nip;

    //membuat contruct dengan parameter sebagai nilai tampung dari  hasil instansiasi kelas pajak
    public function __construct( $jenis_pajak, $kode_pajak, $nilai_pajak, $nama_pegawai, $nip )
    {

        $this->jenis_pajak = $jenis_pajak;
        $this->kode_pajak = $kode_pajak;
        $this->nilai_pajak = $nilai_pajak;
        $this->nama_pegawai = $nama_pegawai;
        $this->nip = $nip;

    }

    //method untuk mendapatkan nilai pajak yang akan di print
    public function getPajak()
    {
        return " {k} $this->jenis_pajak,
                        $this->kode_pajak,
                        $this->nilai_pajak,
                        $this->nama_pegawai,
                        $this->nip ";
    }
}
//instansiasi class dengan object 
$pajak1 = new Pajak("Pajak Bumi Dan Bangunan", "001", 100000, "sitamfan", "12333");
$pajak2 = new Pajak("Pajak hotel restauran", "002", 200000, "sitamfan", "12333");


//print hasil dari program
echo"<====================== output dari construct =====================================";
echo"<br>";
echo  $pajak1->getPajak();
echo"<br>";
echo  $pajak2->getPajak();
echo"<br>";
echo"<br>";

echo"<br>";
echo"<====================== output dari class cetak pajak =====================================";
echo"<br>";
echo"<br>";

//  var_dump($pajak1);