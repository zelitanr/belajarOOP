<?php
class Manusia3 {
    public $nama;
    public $jenisKelamin;
    public $umur;

    public function __construct($nama, $jenisKelamin, $umur) {
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->umur = $umur;

        echo "Objek " . $this->nama . " telah dibuat! <br>";
    }

    public function __destruct() {
        echo "Objek " . $this->nama . " telah dihapus dari memori! <br>";
    }

    public function makan() {
        return $this->nama . " sedang makan.";
    }

    public function jalan() {
        return $this->nama . " sedang jalan.";
    }

    public function belajar() {
        return $this->nama . " yang berumur " . $this->umur . " tahun sedang belajar";
    }
}
$tono = new Manusia3("Tono", "L", 25);
echo $tono->makan() . "<br>";
$tini = new Manusia3("Tini", "P", 30);
echo $tini->belajar() . "<br>";
?>