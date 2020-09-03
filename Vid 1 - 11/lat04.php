<?php 
    //OPERATOR MATEMATIKA
    echo '----------OPERATOR MATEMATIKA---------'. '<br>';

    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo $c. '<br>';

    $c = $a - $b;
    echo $c. '<br>';

    $c = $a * $b;
    echo $c. '<br>';

    $c = $a / $b;
    echo round ($c). '<br>';

    //OPERRATOR LOGIKA
    echo '----------OPERATOR LOGIKA---------'. '<br>';
    $c = $a < $b;
    echo $c. '<br>';

    $c = $a > $b;
    echo $c. '<br>';

    $c = $a == $b;
    echo $c. '<br>';

    $c = $a != $b;
    echo $c. '<br>';

    //INCREMENT
    echo '----------INCREMENT---------'. '<br>';
    $a++;
    echo $a. '<br>';

    //OPERATOR STRING
    echo '----------OPERATOR STRING---------'. '<br>';
    $hewan1 ='Sura';
    $hewan2 ='baya';
    $kota = $hewan1. $hewan2;
    $kota.= ' kota pahlawan';
    echo $kota;



?>