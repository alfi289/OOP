<?php
//{mengakses objek dalam oop
class Laptop{
    var $pemilik, $merk, $ukuran_layar;

    function Hidupkan_laptop(){
        return "Hidupkan laptop";
    }
    function Matikan_laptop(){
        return "Matikan laptop";
    }
}
$laptop_anto = new Laptop();

$laptop_anto->pemilik = "Andi";
$laptop_anto->merk = "Asus ROG";
$laptop_anto->ukuran_layar = "15 inchi";

echo "$laptop_anto->pemilik<br>
$laptop_anto->merk<br>
$laptop_anto->ukuran_layar<br>" . 
$laptop_anto->Hidupkan_laptop() . "<br>" .
$laptop_anto->Matikan_laptop() . "<br><br><br>";
//}

//{sebagai entitas terpisah
class Lptp{
    var $pemilik;

    function Hidupkan_laptop(){
        return "Hidupkan laptop";
    }
}
$laptop_anto = new Lptp();
$laptop_andi = new Lptp();
$laptop_dina = new Lptp();

$laptop_anto->pemilik = "Anto";
$laptop_andi->pemilik = "Andi";
$laptop_dina->pemilik = "Dina";

echo "$laptop_anto->pemilik<br>
$laptop_andi->pemilik<br>
$laptop_dina->pemilik";
//}
?>