<?php
Class Manusia2 {
    public $nama;
    private $jenisKelamin;
    private $umur;
    private $tanggalLahir;

    public function makan() {
        return $this->nama . " sedang makan Nasi Padang.";
    
   }
    public function jalan() {
        return $this->nama . " sedang jalan santai.";
    }

    public function belajar() {
        return $this->nama . " yang berumur " . $this->umur . " tahun sedang belajar PHP.";
    }

    public function setUmur($umur) {
            if (!is_int($umur) || $umur < 0) {
            echo "Error: Umur tidak valid! <br>";
        } else {
            $this->umur = $umur;
        }
    }

    public function getUmur() {
        return $this->umur;
    }

    public function setTanggalLahir($tanggalLahir) {
        $this->tanggalLahir = $tanggalLahir;
    }

   public function getTanggalLahir() {
        $bulan = [
            "01" => "Januari", "02" => "Februari", "03" => "Maret",
            "04" => "April", "05" => "Mei", "06" => "Juni",
            "07" => "Juli", "08" => "Agustus", "09" => "September",
            "10" => "Oktober", "11" => "November", "12" => "Desember"
        ];

        $tanggal = explode("-", $this->tanggalLahir);
        return $tanggal[2] . " " . $bulan[$tanggal[1]] . " " . $tanggal[0];
    }
    public function setJenisKelamin($jenisKelamin) {
        if ($jenisKelamin != "P" && $jenisKelamin != "L") {
            echo "Error: Jenis kelamin harus antara P/L <br>";
        } else {
            $this->jenisKelamin = $jenisKelamin;
        }
    }

    public function getJenisKelamin() {
        if ($this->jenisKelamin == "P") {
            return "Perempuan";
        } else if ($this->jenisKelamin == "L") {
            return "Laki-Laki";
        }
    }
    
    public function biodata() {
        return "Nama Lengkap : " . $this->nama . "<br>" .
               "Jenis Kelamin : " . $this->getJenisKelamin() . "<br>" .
               "Umur : " . $this->getUmur() . "<br>" .
               "Tanggal Lahir : " . $this->getTanggalLahir();
    }
}

$nama = new manusia2();
$nama->nama = "Zelita";
$nama->setUmur(15);
$nama->setTanggalLahir("2009-12-03");
$nama->setJenisKelamin("P");

echo $nama->biodata();

?>