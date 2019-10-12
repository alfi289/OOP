<?php
class Laptop{
    public $pemilik = "Andi";

    public function hidupkan_laptop(){
        return "Hidupkan Laptop $this->pemilik";
    }
}
$laptop_baru = new Laptop();
echo $laptop_baru->hidupkan_laptop();
$laptop_baru->pemilik = "Arie";
echo $laptop_baru->hidupkan_laptop();
$laptop_lama = new laptop();
echo $laptop_lama->hidupkan_laptop();
?>