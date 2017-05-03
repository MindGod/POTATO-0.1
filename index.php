<?php

function readContentFile($file) {
    $failas = file($file);
    return $failas;
}
    function convertToArray($string) {
    return explode ('|', $string);
}

    $failas = readContentFile('whatever.txt');

if ($failas){
    foreach ($failas as $file) {
        $info = convertToArray($file);

        echo 'Vardas: '.$info[1].'<br />';
        echo 'Ginklas: '.$info[2].'<br />';
        echo 'Gime: '.$info[3].'<br />';
        echo 'Auku skaicius: '.$info[4].'<br />';
        echo 'Mire: '.$info[5].'<br />';
        echo 'Bausme: '.$info[6].'<br />';
        echo 'Aprasymas: '.$info[7].'<br />';
        echo '<img src="'.$info[8].'" alt="."/><br />';
        echo '<img src="'.$info[9].'" alt="."/><br />';
    }
}
    ?>
    <a href="add.php">Priteti zudika</a>