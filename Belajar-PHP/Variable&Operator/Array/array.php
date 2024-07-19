<?php

$angka 	= array(1,2,3,4,5); //kumpulan data integer
$buah	= ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string

//tuliskan nama array dan nomor index yang akan diubah, lalu isi dengan data baru
$angka[3]	= 99;  
$buah[2]	= "strawberry";

var_dump($angka);
echo "<br>";
var_dump($buah);
?>