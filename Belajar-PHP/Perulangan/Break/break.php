<?php
$arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
echo "Saya mencari warna hitam<br>";
foreach ($arr_warna as $key => $value) {
    echo "Warna pada elemen array ke-$key adalah $value <br>";
    if ($value == 'hitam') {
        echo "<b>Nah Warna Hitam sudah ditemukan! Dia berada pada indeks ke-$key</b>";
        break;
    }
}
?>