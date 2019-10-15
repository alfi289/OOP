<?php
class Penggajian{
    public $nama, $nip, $alamat, $jumlahker;

    public function __construct($nama, $nip, $alamat, $jumlahker){
        $this->jumlahker = $jumlahker;
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
    }

    public function datadiri(){
        return "Nama : $this->nama<br>
                NIP : $this->nip<br>
                Alamat : $this->alamat<br>";
    }

    public function gajikotor(){
        $jumlah = $this->jumlahker * 75000;
        return $jumlah;
    }

    public function gajibersih(){
        $gajiber = $this->gajikotor() - ($this->gajikotor() * 0.025);
        return $gajiber;
    }
}
if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['nip'];
    $c = $_POST['alamat'];
    $d = $_POST['haker'];
}
$gaji = new Penggajian($a, $b, $c, $d);
echo $gaji->datadiri();
echo "Gaji Kotor : " . $gaji->gajikotor() . "<br>";
echo "Gaji Bersih : " . $gaji->gajibersih();

?>