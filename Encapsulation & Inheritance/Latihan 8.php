 <?php
class Manusia5 {
    public $nama;
    public $jenisKelamin;
    public $umur;

    public function __construct($nama, $jenisKelamin, $umur) {
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->umur = $umur;
    }

    public function makan() {
        return $this->nama . " sedang makan.";
    }

    public function jalan() {
        return $this->nama . " sedang jalan.";
    }
}
 class Siswa extends Manusia5 {
    public $namaSekolah;

    public function __construct($nama, $jenisKelamin, $umur, $namaSekolah) {
        parent::__construct($nama, $jenisKelamin, $umur);
        $this->namaSekolah = $namaSekolah;
    }

    public function belajar() {
        return $this->nama . " sedang belajar di " . $this->namaSekolah;
    }

    public function makan() {
        return $this->nama . " sedang makan di kantin sekolah.";
    }
 }

 $pakDono = new Manusia5("Pak Dono", "L", 50);
 $tono = new Siswa("Tono", "L", 7, "SD Cerdas Bangsa");

    echo $pakDono->makan() . "<br>";
    echo $tono->makan() . "<br>";
    echo $tono->belajar() . "<br>";

// class Manusia5 {
//     public $nama;

//     public function tampilkanPeran() {
//         return $this->nama . " adalah seorang manusia.";
//     }
// }

// class Anak extends Manusia5 {
//     public function tampilkanPeran() {
//         return $this->nama . " adalah seorang anak yang berbakti di rumah.";
//     }
// }

// class Siswa extends Manusia5 {
//     public function tampilkanPeran() {
//         return $this->nama . " adalah seorang siswa yang rajin di sekolah.";
//     }
// }

// $tonoRumah = new Anak();
// $tonoSekolah = new Siswa();
// $tonoRumah->nama = "Tono";

// echo $tonoRumah->tampilkanPeran() . "<br>";
// echo $tonoSekolah->tampilkanPeran() . "<br>";

?> 