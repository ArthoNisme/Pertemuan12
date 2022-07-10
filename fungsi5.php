<?php
//PASSING BY REFERENCE

function tambah_string(&$str){
    $str = $str . ", Rizqi";
    return $str;
}

$string = "Muhammad Khoirrur ";
echo "\$string = $string<br>";
echo tambah_string($string). "<br>";
echo "\$string = $string<br>";

?>