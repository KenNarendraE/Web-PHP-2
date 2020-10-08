<h1>Delete Menu</h1>

<?php  //digunakan untuk mengambil urutan

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tblmenu WHERE idmenu=$id"; //DELETE berguna untuk menghapus menu yang dipilih

        $db->runSQL($sql); //untuk mengirim ke server

        header("location:?f=menu&m=select"); //untuk mengembalikan ke halaman awal
    }

?>

<h3>Delete Item</h3>