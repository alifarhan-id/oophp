<?php

class Pajak {
    public $jenis_pajak;
    public $kode_pajak;
    public $nilai_pajak;
    public $nama_pegawai;
    public $nip;

    public function __construct( $jenis_pajak, $kode_pajak, $nilai_pajak, $nama_pegawai, $nip )
    {

        $this->jenis_pajak = $jenis_pajak;
        $this->kode_pajak = $kode_pajak;
        $this->nilai_pajak = $nilai_pajak;
        $this->nama_pegawai = $nama_pegawai;
        $this->nip = $nip;

    }

    public function getPajak()
    {
        return " $this->jenis_pajak,
                        $this->kode_pajak,
                        $this->nilai_pajak,
                        $this->nama_pegawai,
                        $this->nip ";
    }
}

$pajak1 = new Pajak("Pajak Bumi Dan Bangunan", "001", 100000, "sitamfan", "12333");
$pajak2 = new Pajak("Pajak hotel restauran", "002", 200000, "sitamfan", "12333");


echo  $pajak1->getPajak();

echo"<br>";
echo  $pajak2->getPajak();

//  var_dump($pajak1);