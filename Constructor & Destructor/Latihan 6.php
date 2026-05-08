<?php
    // class Login {
    //     public $namaAwal;
    //     public function __construct($nama) {
    //         $this->namaAwal = $nama;
    //         echo "Selamat datang " . $this->namaAwal ;
    //     }
    //     public function __destruct() {
    //         echo "Terima kasih " . $this->namaAwal . " telah logout!";
    //     }
    // }

    // $login1 = new Login("Zelita");

    // class Koneksi {
    //     public function __construct() {
    //         echo "Koneksi database berhasil dibuat! <br>";
    //     }

    //     public function __destruct() {
    //         echo "Koneksi database ditutup! <br>";
    //     }
    // }

    // $koneksi1 = new Koneksi();

    // class Belanja {
    //     public function __construct() {
    //         echo "Keranjang belanja siap digunakan! <br>";
    //     }

    //     public function __destruct() {
    //         echo "Keranjang telah diberasihkan <br>";
    //     }
    // }

    // $belanja1 = new Belanja();

    class File {
        public function __construct() {
            echo "File sedang dibuka.. <br>";
        }

        public function __destruct() {
            echo "File berhasil disimpan dan ditutup <br>";
        }
    }

    $file1 = new File();
?>