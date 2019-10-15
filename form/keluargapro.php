<?php
class Keluarga{
    public $nama, $nik, $alamat, $umur;

    public function __construct($nama, $nik, $alamat, $umur){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
    public function anggota_keluarga(){
        foreach($this->nama as $data=>$key){
        echo "Nama : " . $this->nama[$data] . "<br>";
        echo "NIK : " . $this->nik[$data] . "<br>";
        echo "Alamat : " . $this->alamat[$data] . "<br>";
        echo "Umur : " . $this->umur[$data] . "<br><hr>";
}
    }
}
if(isset($_POST['sim'])){
    $a = $_POST['nama'];
    $b = $_POST['nik'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];    
}
echo "<center><h2>Hasil</h2></center>";
$keluarga1 = new Keluarga($a, $b, $c, $d);
$keluarga1->anggota_keluarga();
?> 