<?php
//PASSING BY REFERENCE

function tambah_string(&$str){
    $str = $str . ", Ardhan";
    return $str;
}

$string = "Ardhan Hanif ";
echo "\$string = $string<br>";
echo tambah_string($string). "<br>";
echo "\$string = $string<br>";

?>