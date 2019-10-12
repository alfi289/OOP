<?php
class Karyawan{
    public $nama, $pekerjaan, $tahun_bekerja;
    protected $gaji;
    private $gjmanager = 5000000, $gjob = 500000;

    public function setdata($nama, $pekerjaan, $tahun_bekerja){
        $this->nama = $nama;
        $this->pekerjaan = $pekerjaan;
        $this->tahun_bekerja = $tahun_bekerja;
    }
    public function getdata(){
        if(($this->pekerjaan == "manager") && ($this->tahun_bekerja >= "10")){
            $this->gaji = $this->tahun_bekerja*$this->gjmanager;
        }
        elseif(($this->pekerjaan == "ob") && ($this->tahun_bekerja >= "10")){
            $this->gaji = $this->tahun_bekerja*$this->gjob;
        }
        elseif(($this->pekerjaan == "manager") && ($this->tahun_bekerja >= "5")){
            $this->gaji = $this->tahun_bekerja*($this->gjmanager - 1000000);
        }
        elseif(($this->pekerjaan == "ob") && ($this->tahun_bekerja >= "5")){
            $this->gaji = $this->tahun_bekerja*($this->gjob - 100000);
        }
        return $this->gaji;
    }

}
$karyawan = new Karyawan();
$karyawan->setdata("anton", "manager", 10);

echo "Nama : $karyawan->nama <br>
Pekerjaan : $karyawan->pekerjaan <br>
Tahun bekerja : $karyawan->tahun_bekerja <br>
Gaji : " . number_format($karyawan->getdata(), 0, ",", ".") . "<br>";
?>