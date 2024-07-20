<?php
$tujuan = 'Surabaya';
$harga    = 100000;
$diskon    = 10000;

if ($tujuan == 'Surabaya' || $tujuan == 'Malang') {
    $harga    = $harga - $diskon;
    echo "Harga tiket adalah " . $harga;
} else {
    echo "Harga tiket adalah " . $harga;
}
?>