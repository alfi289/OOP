<?php
class Komputer{
    private $jenis_processor = "AMD A9";

    public function tampilkan_processor(){
        return $this->jenis_processor;
    }
}
class Laptop extends Komputer{
    public function tampilkan_processor(){
        return $this->jenis_processor;
    }
}
$komputer_baru = new Komputer();
$laptop_baru = new Laptop();
echo $komputer_baru->tampilkan_processor();
echo $laptop_baru->tampilkan_processor();
?>