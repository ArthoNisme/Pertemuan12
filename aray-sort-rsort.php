<?php
$arrNilai = array("Rozik"=>80,"Akhsan"=>90,"Januar"=>75,"Salman"=>85);
echo "<b>Array sebelum Diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah Diurutkan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah Diurutkan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>