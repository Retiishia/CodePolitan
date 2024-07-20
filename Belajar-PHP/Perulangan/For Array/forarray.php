<?php
$arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru'];
$jumlah=0;
//jumlah elemen array ada 11
for($i=0;$i<11;$i++)
{
    if($arr_warna[$i]=='merah')
    {
        $jumlah++;
    }
}
echo "Jumlah warna merah ".$jumlah;
?>