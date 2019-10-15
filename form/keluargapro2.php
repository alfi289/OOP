<?php
class Keluarga{
    public $nama, $nik, $alamat, $umur;

    public function __construct($nama, $nik, $alamat, $umur){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
}
if(isset($_POST['sim'])){
    $a = $_POST['nama'];
    $b = $_POST['nik'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];    
}
echo "<center><h2>Data Anggota Keluarga</h2></center>";
$keluarga1 = new Keluarga($a, $b, $c, $d);
foreach($a as $data=>$key){
    echo "Nama : " . $a[$data] . "<br>";
    echo "NIK : " . $b[$data] . "<br>";
    echo "Alamat : " . $c[$data] . "<br>";
    echo "Umur : " . $d[$data] . "<br><hr>";
}
?> 