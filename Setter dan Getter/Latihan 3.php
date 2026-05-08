<?php
class Siswa {
    private $nama;
    private $kelas;
    private $nilai;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setKelas($kelas) {
        if ($kelas != 10 && $kelas != 11 && $kelas != 12) {
            echo "Kelas harus antara 10/11/12 <br>";
        } else {
            $this->kelas = $kelas;
        }
    }

    public function setNilai($nilai) {
        if ($nilai < 0 || $nilai > 100) {
            echo "Nilai harus antara 0 - 100 <br>";
        } else {
            $this->nilai = $nilai;
        }
    }

    public function getNama() {
        return ucwords($this->nama);
    }

    public function getKelas() {
        if ($this->kelas == 10) return "X";
        if ($this->kelas == 11) return "XI";
        if ($this->kelas == 12) return "XII";
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function tampilData() {
        echo "Nama : " . $this->getNama() . "<br>";
        echo "Kelas : " . $this->getKelas() . "<br>";
        echo "Nilai : " . $this->getNilai();
    }
}

$siswa = new Siswa();
$siswa->setNama("Zelita Nurzahwa");
$siswa->setKelas(10);
$siswa->setNilai(90);

$siswa->tampilData();
?>