<?php
$arr_warna    = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah    = 0;
$i        = 0;
while ($i <= 11) {
    if ($arr_warna[$i] == 'merah') {
        $jumlah++;
    }
    $i++;
}
echo "Jumlah warna merah " . $jumlah;
?>