<?php
class Mobil {
    public $merk;
    public $status;

    public function JalankanMobil() {
        if ($this->status >= "50km") {
            return "Mobil " . $this->merk . " berjalan " . $this->status;
        } else {
            return "Mobil " . $this->merk . " berhenti ";
        }
}
}
$mobilSaya = new Mobil();
$mobilSaya->merk = "Toyota";
$mobilSaya->status = "50km";
echo $mobilSaya->JalankanMobil();
?>