<?php
class Rekening{
    public $pemilik;
    protected $no_rek = "0930842";
    private $pin_atm = 793279;

    public function transfer(){
        return $this->no_rek;
    }
    public function ambil_uang(){
        return $this->pin_atm;
    }
}
$rekening1 = new Rekening();
$rekening1->pemilik = "Ujang";

echo "Pemilik : $rekening1->pemilik<br>
No Rekening : " . $rekening1->transfer()  . "<br>
Pin ATM : " . $rekening1->ambil_uang();
?>