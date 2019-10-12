<?php
class Kendaraan{
    public function __construct(){
        echo "Mencari Kendaraan<br>";
    }
    public function __destruct(){
        echo "Berhasil Mencari Kendaraan<br>";
    }
}
class Mobil extends Kendaraan{
    public function __construct(){
        parent::__construct();
        echo "Naik (masuk) Mobil<br>";
    }
    public function jalankan(){
        echo "Jalankan/Naikkan Mobil<br>";
    }
    public function __destruct(){
        echo "Keluar Mobil<br>";
        parent::__destruct();
    }
}
$avanza = new Mobil();
echo $avanza->jalankan();
?>
