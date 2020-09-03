<?php 
    // $nama = array('anatoli', 'vadim', 'dimitri');
    // var_dump($nama);
    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key. '<br>';
    // }

    echo '<br>';

    $nama = array(
        'anatoli' => 'chernobyl',
        'vadim' => 'Gulag',
        'dimitri' => 'yakutsk'
    );

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $k => $v) {
        echo $k. "-". $v. '<br>';
    }


?>