<?php
class PaketLiburan {
    protected $tujuan;
    protected $hargaDasar;

    public function getTujuan() {
        $this->tujuan = ucwords($this->tujuan);
        return $this->tujuan;
    }

    public function setTujuan($tujuan) {
        $this->tujuan = $tujuan;
    }

    public function setHargaDasar($hargadasar) {
        $this->hargaDasar = $hargadasar;
    }
}

class PaketAlam extends PaketLiburan {
    private $biayaAsuransi;

    public function setAsuransi($biaya) {
        if ($biaya < 0 || $biaya > 500000) {
            $this->biayaAsuransi = 500000;
            echo "Biaya asuransi tidak valid";
        } else {
            $this->biayaAsuransi = $biaya;
        }
    }

    public function hitungTotal(){
        $total = $this->hargaDasar + $this->biayaAsuransi;
        return $total;
    }

    public function tampilData() {
        return "Tujuan: " . $this->getTujuan() . "<br>" .
               "Harga Dasar: Rp " . $this->hargaDasar . "<br>" .
               "Biaya Asuransi: Rp " . $this->biayaAsuransi . "<br>" .
               "Total Biaya: Rp " . $this->hitungTotal();
    }
}

class PaketMewah extends PaketLiburan {
    private $levelMewah;

    public function setLevel($angka) {
        if ($angka < 1 || $angka > 3) {
            $this->levelMewah = 1;
            echo "Level mewah hanya tersedia 1, 2, atau 3";
        } else {
            $this->levelMewah = $angka;
        }
    }

    public function getFasilitas() {
        if ($this->levelMewah == 1) {
            return "Fasilitas: Silver Lounge";
        } elseif ($this->levelMewah == 2) {
            return "Fasilitas: Gold Suite";
        } else {
            return "Fasilitas: Diamond Private Butler";
        }
    }

    public function tampilData() {
        return "Tujuan: " . $this->getTujuan() . "<br>" .
               "Harga Dasar: Rp " . $this->hargaDasar . "<br>" .
                "Level Mewah: " . $this->levelMewah . "<br>" .
                "Fasilitas: " . $this->getFasilitas();
    }
}

echo "<p>Paket Liburan Alam</p>";
$paket1 = new PaketAlam();
$paket1->setTujuan("pasar bali");
$paket1->setHargaDasar(2000000);
$paket1->setAsuransi(300000);
echo $paket1->tampilData() . "<br><br>";

echo "<p>Paket Liburan Mewah</p>";
$paket2 = new PaketMewah();
$paket2->setTujuan("paris");
$paket2->setHargaDasar(5000000);
$paket2->setLevel(1);
echo $paket2->tampilData() . "<br><br>";