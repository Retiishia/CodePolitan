<?php
$nama = "Meilan";
function tulisPesan()
{
    global $nama;
    echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
tulisPesan($nama);
?>