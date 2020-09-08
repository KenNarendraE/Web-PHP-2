<?php 

    $cookie_name = 'user';
    $cookie_value = 'anatoli';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'debil';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    // setcookie ("user", "debil", time() + 3600, "/");

    echo '</br>';

    var_dump($_COOKIE);



?>