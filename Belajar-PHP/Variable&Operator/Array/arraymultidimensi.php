<?php
$mahasiswa = array(
    array("Marimar", 20, "Wanita"),
    array("Soledad", 25, "Wanita"),
    array("Alfonso", 30, "Pria")
);
for ($baris = 0; $baris < 3; $baris++) {
    echo "<p><b>Baris No: $baris</b></p>";
    echo "<ul>";
    for ($kolom = 0; $kolom < 3; $kolom++) {
        echo "<li>" . $mahasiswa[$baris][$kolom] . "</li>";
    }
    echo "</ul>";
}
?>