<?php  //digunakan untuk mengambil urutan

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tblkategori WHERE idkategori=$id"; //DELETE berguna untuk menghapus kategori yang dipilih

        $db->runSQL($sql); //untuk mengirim ke server

        header("location:?f=kategori&m=select"); //untuk mengembalikan ke halaman awal
    }

?>

<h3>Delete Item</h3>