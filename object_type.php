<?php
    require ('constructor.php');

class CetakPajak{

    //method dengan object type dari kelas pajak
    public function getCetak(PAJAK $pajak){

        $str = "{$pajak->getPajak()}";
        return $str;
    }
}

$cetak = new CetakPajak();

echo $cetak->getCetak($pajak1);
echo "<br>";
echo $cetak->getCetak($pajak2);