<?php
$a = 10;
$a++; //Increment

echo $a; // menaambah 1 dan menghasilkan nilai 11

$b = 10;
$b--; //Decrement

echo $b; //mengurangi 1 dan menghasilkan nilai 9

$c = 10;
$c++;
$c++;

echo $c; //akan menghasilkan nilai 12 karena menggunakan 2x operator increment.

$a1 = 10;
$b2 = 11;
$hasil = $a1 / $b2; //contoh perkalian
echo round($hasil); //menggunakan fungsi round agar angka dibulatkan.

$round1 = 10;
$round2 = 3;
$hasil1 = $round1 / $round2;
echo round($hasil1, 2); //membulatkan dan hanya mengeluarkan 2 digit float dibelakang.
