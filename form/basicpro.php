<?php
class Aritmatika{
    public $bil1, $bil2;
    public function __construct($bil1, $bil2){
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }
    public function tambah(){
        $tambah = $this->bil1 + $this->bil2;
        return "Hasil Pertambahan : $tambah<br>";
    }
    public function kurang(){
        $kurang = $this->bil1 - $this->bil2;
        return "Hasil Pengurangan : $kurang<br>";
    }
    public function kali(){
        $kali = $this->bil1 * $this->bil2;
        return "Hasil Perkalian : $kali<br>";
    }
    public function bagi(){
        $bagi = $this->bil1 / $this->bil2;
        return "Hasil Pembagian : $bagi";
    }
}
if(isset($_POST['submit'])){
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
}
echo "<center>Hasil Perhitungan</center><br>";
$hasil = new Aritmatika($a, $b);
echo $hasil->tambah();
echo $hasil->kurang();
echo $hasil->kali();
echo $hasil->bagi();
if(!isset($_POST['submit'])){
    header('location: basic.php');
}
?>