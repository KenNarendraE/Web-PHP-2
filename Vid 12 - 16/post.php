<form action="" method="post">
    Email :
    <input type="Email" name="email">
    Password :
    <input type="password" name="password">
    <input type="submit" name="submit">

</form>

<?php 

    if (isset ($_POST['submit'])) {
        $email = $_POST ['email'];
        $password = $_POST['password'];

        echo $email;
        echo '<br>';
        echo $password;
    }


?>