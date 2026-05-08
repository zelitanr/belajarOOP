<?php
class Manusia{
    public $nama;
    public $jenis_kelamin;
    public $umur;

    public function makan (){
        return $this->nama . " sedang makan Nasi Padang.";
    }
    public function belajar (){
        return $this->nama . " yang ber umur " . $this->umur . " tahun sedang belajar PHP."; 
    }
}
$data1 = new Manusia();
$data1->nama ="Tono";
$data1->jenis_kelamin = "Laki-laki";
$data1->umur ="7"; 

$data2 = new Manusia();
$data2->nama ="Tini";
$data2->jenis_kelamin = "Perempuan";
$data2->umur = "7";

echo $data1->belajar() . "<br>";
echo $data2->makan();

?>