<?php
class Buku{
    public $judul;
    public $penulis;

    public function tampilkanDetail(){
        return "buku ".$this->judul.", ditulis oleh ".$this->penulis;
    }
}
$buku1 = new Buku();
$buku1->judul = "Laskar Pelangi";
$buku1->penulis = "Andrea Hirata";

echo $buku1->tampilkanDetail();
?>