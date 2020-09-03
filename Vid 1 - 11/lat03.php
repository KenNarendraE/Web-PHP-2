<?php 

    function belajar(){
        echo "saya belajar function";
    }
    echo belajar();
    echo '<br>';

    function luaspersegi(){
        $p = 5;
        $l = 4;
        $luas = $p * $l;

        echo $luas;
    }

    luaspersegi();
    echo '<br>';

    function luaspersegi2($p = 2, $l = 3){
        $luas = $p * $l;

        echo $luas;
    }

    luaspersegi2();
    echo '<br>';

    function luaspersegi3($p = 2, $l = 15){
        $luas = $p * $l;

        return $luas;
    }
    echo luaspersegi3();
    echo '<br>';

    function luaspersegi4($p = 2, $l = 15){
        $luas = $p * $l;

        return $luas;
    }
    echo luaspersegi4()*5;
    echo '<br>';

    function luaspersegi5($p, $l){
        $luas = $p * $l;

        return $luas;
    }
    echo luaspersegi5(3,3)*10;



?>