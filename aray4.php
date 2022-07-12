<?php

$arrNilai = array("Ardhan"=>90,"Akhsan"=>90,"Windy"=>95,"salsa"=>85);
echo "Menampilkan isi Array asosiatif dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}

reset($arrNilai);
echo "<br>Menampilkan isi array asosiayif dengan WHILE dan LIST : <br>";
while (list($nama, $nilai) = each($arrNilai)) {
    echo "Nilai $nama = $nilai <br>";
}
?>