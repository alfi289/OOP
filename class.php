<?php
// 1. class adalah sebuah blueprint/template untuk membuat instance dari object
// 2. class mendefinisikan object
// 3. menyimpan data (property) dan prilaku(method)



class Kucing{
    //property
    public $warna;
    public $jml_kaki;
    public $mkn_fav;

    //method
    public function bersuara(){
        return "Miawww";
    }
}
//objek
$kucing1 = new Kucing;
$kucing1->warna = "Coklat";
$kucing1->jml_kaki = 4;
$kucing1->mkn_fav = "Pindang";
// var_dump($kucing1);
echo "Warna Kucing : $kucing1->warna<br>";
echo "Suaranya : " . $kucing1->bersuara();
?>
