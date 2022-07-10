<?php


//Fungsi dengan return value dan parameter
function luas_lingkaran($jari){
    return 3.14*$jari*$jari;
}

//pemanggil fungsi
$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
