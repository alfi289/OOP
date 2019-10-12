<?php
class Lingkaran{
    public $jari, $v;

    public function __construct($jarijari=0){
        $this->jari = $jarijari;
    }
    public function menentukan_v(){
        if($this->jari % 7 == 0){
            $this->v = 22/7;
        }
        else{
            $this->v = 3.14;
        }
        return $this->v;
    }
    public function menghitung_keliling(){
        return "Keliling Lingkaran : " . (2*$this->menentukan_v())*$this->jari;
    }
    public function menghitung_luas(){
        return "Luas Lingkaran : " . $this->menentukan_v()*$this->jari*$this->jari;
    }
}
$lingkaran1 = new Lingkaran(14); 

echo "Jari-jari lingkaran : $lingkaran1->jari<br>" . 
$lingkaran1->menghitung_keliling() . "<br>" .
$lingkaran1->menghitung_luas();
?>