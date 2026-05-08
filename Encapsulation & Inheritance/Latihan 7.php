<?php
class Manusia4 {
    private $saldoBank;

    public function __construct($saldoAwal) {
        $this->saldoBank = $saldoAwal;
    }

    public function getSaldo() {
       return "Saldo saat ini: " . $this->saldoBank;
    }

    public function setSetorTunai($saldo) {
        $this->saldoBank += $saldo;
    }
}

$pakDono = new Manusia4 (5000);
echo $pakDono->getSaldo() . "<br>";
$pakDono->setSetorTunai(2000);
echo $pakDono->getSaldo() . "<br>";
?>