<?php 
class Siswa {
    public $nama;
    public const SEKOLAH = "SMK Wikrama Bogor";
    public static $totalSiswa = 0;
    protected static $label = "SISWA UMUM";

    public function __construct($nama) {
        $this->nama = $nama;
        self::$totalSiswa++;
    }

    public static function perkenalan($objekSiswa) {
        return "Halo, nama saya " . $objekSiswa->nama . "<br>" .
               "dari " . self::SEKOLAH . "<br>" .
               "Kategori: " . static::$label . "<br>" ;
    }

    public static function tampilkanTotal() {
        return "Total siswa saat ini: " . self::$totalSiswa;
    }
}

class SiswaBerprestasi extends Siswa {
    protected static $label = "SISWA BERPRESTASI";
    public $prestasi;

    public function __construct($nama, $prestasi) {
        parent::__construct($nama);
        $this->prestasi = $prestasi;
    }

    public static function perkenalan($objekSiswa) {
       $dataParent = parent::perkenalan($objekSiswa);
         return $dataParent . "Prestasi: " . $objekSiswa->prestasi . "<br>";
     }
}

echo Siswa::tampilkanTotal() . "<br>";
$siswa1 = new Siswa("Andi");
$siswa2 = new Siswa("Budi");
$sisber = new SiswaBerprestasi("Citra", "Juara web desain");
echo Siswa::perkenalan($siswa1) . "<br>";
echo Siswa::perkenalan($siswa2) . "<br>";
echo SiswaBerprestasi::perkenalan($sisber) . "<br>";
echo Siswa::tampilkanTotal() . "<br>";