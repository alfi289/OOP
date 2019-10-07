<?php
class Rpl{
    public $nama_km;
    public $jk;
    public $jml_siswa;
    public $nama_wali_kelas;

    public function belajar(){
        return "belajar OOP";
    }
}
$RPL1 = new RPL;
$RPL1->jk = "laki-laki";
$RPL1->nama_km = "Raihan";
$RPL1->jml_siswa = 35;
$RPL1->nama_wali_kelas = "Pa Sofwan";

echo "Kelas : XI RPL 1<br>
 Jumlah siswa : $RPL1->jml_siswa<br>
 Wali Kelas : $RPL1->nama_wali_kelas<br>
 KM : " . $RPL1->nama_km . "<br>
 Jenis Kelamin : " . $RPL1->jk . "<br><br><br>";
?>