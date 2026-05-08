<?php
   class Guru {
    public $nama;
    private $gaji;
    protected $noNIP;

    public function setGaji($gajibulanan) {
       $this -> gaji = $gajibulanan;
    }
    public function getGaji() {
        return $this -> gaji;
    }
    public function setNoNIP($nip) {
        $this -> noNIP = $nip;
    }
    public function getNoNIP() {
        return $this -> noNIP;
    }
   }
   $guru = new Guru();
   $guru->setGaji (12000000);
   $guru->setNoNIP("123456789");
   $guru->nama = "Pa Budi";
   echo "Nama guru : " . $guru->nama . "<br>". "No NIP :" . $guru->getNoNIP() . "<br>" . "Gaji Bulanan :" . $guru->getGaji();
?>