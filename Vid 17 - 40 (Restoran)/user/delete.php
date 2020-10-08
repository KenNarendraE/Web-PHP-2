

<?php  //digunakan untuk mengambil urutan

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tbluser WHERE iduser=$id"; //DELETE berguna untuk menghapus user yang dipilih

        $db->runSQL($sql); //untuk mengirim ke server

        header("location:?f=user&m=select"); //untuk mengembalikan ke halaman awal
    }

?>

<h3>Delete Item</h3>