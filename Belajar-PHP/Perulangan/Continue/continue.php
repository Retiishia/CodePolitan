<?php
$arr_warna    = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
foreach ($arr_warna as $key => $value) {
    if ($value == 'hitam') {
        continue;
    }
    echo "Warna pada elemen array ke-$key adalah $value <br>";
}
?>