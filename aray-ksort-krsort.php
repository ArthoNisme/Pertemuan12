<?php
$arrNilai = array("Rozik"=>80,"Akhsan"=>90,"Januar"=>75,"Salman"=>85);
echo "<b>Array sebelum Diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah Diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah Diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>