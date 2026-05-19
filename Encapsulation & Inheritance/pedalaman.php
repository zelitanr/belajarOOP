<?php 
class User {
    public $nama;

    public function tampilUser() {
        echo "Nama User: " . $this->nama;
    }
}

class Admin extends User {
    public function role() {
        echo $this->nama . " adalah seorang Admin Hotel.";
    }
}

class Customer extends User {
    public function role() {
        echo $this->nama . " adalah seorang Customer Hotel.";
    }
}

class Kamar {
    public function detailKamar() {
        echo "Detail kamar hotel.";
    }
}

class Suite extends Kamar {
    public function detailKamar() {
        echo "kamar Suite : Tempat tidur king size, jacuzzi, ruang tamu.";
    }
}

class Deluxe extends Kamar {
    public function detailKamar() {
        echo "kamar Deluxe : Tempat tidur queen size, balkon, TV.";
    }
}

class Standard extends Kamar {
    public function detailKamar() {
        echo "kamar Standard : Tempat tidur single, kipas angin.";
    }
}

$admin1 = new Admin();
$admin1->nama = "jelita";
$costomer1 = new Customer();
$costomer1->nama = "copi";
$admin1->tampilUser();
echo "<br>";
$admin1->role();
echo "<br>";
$costomer1->tampilUser();
echo "<br>";
$costomer1->role();

echo "<br><br>";
$kamar1 = new Suite();
$kamar2 = new Deluxe(); 
$kamar3 = new Standard();
$kamar1->detailKamar();
echo "<br>";
$kamar2->detailKamar();
echo "<br>";
$kamar3->detailKamar();
