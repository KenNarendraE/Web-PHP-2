<nav>
    <ul>
        <li><a href="?pilihan=isi">ISI</a></li>
        <li><a href="?pilihan=hapus">HAPUS</a></li>
        <li><a href="?pilihan=destroy">DESTROY</a></li>
    </ul>
</nav>

<?php 

session_start();

    if (isset($_GET['pilihan'])) {
        $pilihan = $_GET['pilihan'];

        echo $pilihan;

        switch ($pilihan) {
            case 'isi':
                isisession();
                break;

            case 'hapus':
                unset($_SESSION['alamat']);
                break;

            case 'destroy':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }

    

    function isisession(){

    $_SESSION ['user'] = 'Debil'; 
    $_SESSION ['user2'] = 'Anatoli'; 
    $_SESSION ['alamat'] = 'Motherland';
    
    }

    
    // var_dump($_SESSION);



?>