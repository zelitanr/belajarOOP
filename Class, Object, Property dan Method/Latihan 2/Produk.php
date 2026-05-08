<?php
class Produk {
    public $namaBarang;
    public $harga;

    public function formatHarga() {
       $this->harga = "RP " . $this->harga;
       return $this->namaBarang . " harganya " . $this->harga;
    }
}
$laptop = new Produk();
$laptop->namaBarang = "Laptop";
$laptop->harga = "10.000.000";      
echo $laptop->formatHarga() . "<br>";
    
$mouse = new Produk();
$mouse->namaBarang ="Mouse";
$mouse->harga ="50.000";
echo $mouse->formatHarga();
?>