<?php
class Komputer {
    public $processor = "Intel Core i7";

    public function __construct(){
        echo "Construct Dari Komputer<br>";
    }
    public function __destruct()
    {
        echo "Destruct Dari Komputer<br>";
    }
}

class Laptop extends Komputer{
    public function __construct(){
        parent::__construct();
        echo "Construct Dari Laptop<br>";
    }
    public function spesifikasi(){
        echo "Spesifikasi Laptop : ";
    }
    public function __destruct()
    {
        echo "Destruct Dari Laptop<br>";
        parent::__destruct();
    }
}
$asus = new Laptop();
$asus->spesifikasi();
echo "$asus->processor<br>";

