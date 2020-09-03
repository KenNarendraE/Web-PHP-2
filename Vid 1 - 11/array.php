<?php 

    //Array Dimensi
    //Cara 1

    // $nama = array("jhonny","jordi","lutfi","james");

    // var_dump($nama);

    // echo '<br>';
    // echo $nama[1];
    // echo '<br>';

    // for ($i=0; $i < 4  ; $i++) { 
    //     echo $nama[$i]. '<br>';
    // }

    //Cara 2

    // foreach ($nama as $key) {
    //     echo $key;
    // }

    //Array Asosiatif

    $nama = array(
        "jhonny" => "Austria",      //$nama["jhonny"]="Austria";
        "jordi" => "italia",        //$nama["jordi"]="italia";
        "anatoli" => "motherland",  //$nama["anatoli"]="motherland";
        "james" => "england"        //$nama["james"]="england";
    );

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $key => $value) {
        echo $key. " => ". $value;
        echo '<br>';
    }


?>