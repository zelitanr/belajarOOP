<?php
Class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function hitungLuas(){
        return $this->panjang * $this->lebar;
    }
}
$kontak = new PersegiPanjang();
$kontak->panjang = 10;
$kontak->lebar = 5;

echo "Luas persegi panjang : " . $kontak->hitungLuas();
?>