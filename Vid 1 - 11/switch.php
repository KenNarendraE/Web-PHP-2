<?php 

    $hari = 4;

    switch ($hari) {
        case '1':
            echo 'senin';
            break;

        case '2':
            echo 'selasa';
            break;

        case '3':
            echo 'rabu';
            break;

        case '4':
            echo 'kamis';
            break;
        
        default:
            echo 'hari belum dibuat';
            break;
    }

    echo '<br>';

    $pilihan = 'buat akun';

    switch ($pilihan) {
        case 'login':
            echo 'masukkan username dan password anda';
            break;

        case 'buat akun':
            echo 'silahkan buat username dan password';
            break;

        case 'lupa sandi':
            echo 'kami sudah mengirimkan link login ke email anda';
            break;
        
        default:
            echo 'silahkan pilih opsi diatas';
            break;
    }
?>