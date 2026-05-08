<?php
class Hewan {
    public $nama = "kucing";
    public $kaki;
    public $mamalia;

    public function showNama(){
        $this->mamalia = "melahirkan";
        return "{$this->nama} {$this->mamalia}";
    }
}

$kucing = new Hewan();
$kucing->kaki = "empat";

echo "Ini adalah pemanggilan property" . $kucing->nama . "<br>";
echo "kakinya ada :" . $kucing->kaki . "<br>";
echo "ini pemanggilan method" . $kucing->showNama();
?>