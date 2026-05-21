<?php
abstract class MesinATM {
    abstract public function prosesTransaksi();

    public function tampilkanSapaan() {
        return "Selamat datang di ATM";
    }
}

class TarikTunai extends MesinATM {
    public function prosesTransaksi() {
        return "Uang sedang disiapkan.. Silakan ambil uang anda.";
    }
}

class CekSaldo extends MesinATM {
    public function prosesTransaksi() {
        return "Menghubungkan ke database.. Saldo Anda adalah Rp. 5.000.000";
    }
}

$TarikTunai = new TarikTunai();
$CekSaldo = new CekSaldo();
echo $TarikTunai->tampilkanSapaan() . "<br>";
echo $TarikTunai->prosesTransaksi() . "<br><br>";
echo $CekSaldo->tampilkanSapaan() . "<br>";
echo $CekSaldo->prosesTransaksi() . "<br><br>";
?>
