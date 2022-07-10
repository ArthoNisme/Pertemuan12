<?php
$arrNilai = array("Rozik"=>80,"Akhsan"=>90,"Januar"=>75,"Salman"=>85);
echo "<b>Array sebelum Diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah Diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah Diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";


?>