<?php
$arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
$jumlah_merah = 0;
foreach ($arr_warna as $key => $value) {
    echo "Warna pada elemen array ke-$key adalah $value <br>";
    if ($value == 'merah') {
        $jumlah_merah++;
    }
}
echo "Jumlah warna merahnya adalah $jumlah_merah";
?>