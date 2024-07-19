<?php
$psikotes    = 85;
$wawancara    = 'lulus';
$kesehatan    = 'tidak';
if ($psikotes >= 80) {
    echo "Selamat Anda Lulus Psikotes" . "<br>";
    if ($wawancara == 'lulus') {
        echo "Selamat Anda Lulus Wawancara" . "<br>";
        if ($kesehatan == 'lulus') {
            echo "Selamat Anda Layak menjadi karyawan Kami";
        } else {
            echo "Mohon Maaf Anda tidak Lulus Tes Kesehatan";
        }
    } else {
        echo "Mohon Maaf Anda tidak Lulus Wawancara";
    }
} else {
    echo "Mohon Maaf Anda tidak Lulus Psikotes";
}
