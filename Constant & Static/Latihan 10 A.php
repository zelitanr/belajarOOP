<?php 
class Kendaraan {
    public $model;
    public const DEALER = "Indo Jaya Motor";
    public static $stokUnit = 0;
    protected static $kategori = "UNIT REGULER";

    public function __construct($model) {
        $this->model = $model;
        self::$stokUnit++;
    }

    public static function cekUnit($objekKendaraan) {
        return "Unit: " . $objekKendaraan->model . "<br>" .
               "Dealer: " . self::DEALER . "<br>" .
               "Status: " . static::$kategori . "<br>" ;
    }

    public static function totalStok() {
        return "Total stok di dealer: " . self::$stokUnit . " unit";
    }
}

class MobilMewah extends Kendaraan {
    protected static $kategori = "UNIT PREMIUM LIFESTYLE";
    public $garansi; 

    public function __construct($model, $garansi) {
        parent::__construct($model);
        $this->garansi = $garansi;
    }

    public static function cekUnit($objekKendaraan) {
       $dataParent = parent::cekUnit($objekKendaraan);
         return $dataParent . "Garansi: " . $objekKendaraan->garansi . "<br>";
    }
}

echo Kendaraan::totalStok() . "<br>";
$mobil1 = new Kendaraan("Avanza");
$mobil2 = new Kendaraan("Brio");
$mobil3 = new MobilMewah("Ferrari", "10 tahun");
echo Kendaraan::cekUnit($mobil1);
echo Kendaraan::cekUnit($mobil2);
echo MobilMewah::cekUnit($mobil3);
echo Kendaraan::totalStok() . "<br>";
?>