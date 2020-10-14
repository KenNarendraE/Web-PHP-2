

<?php  //digunakan untuk mengambil urutan

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$id"; //DELETE berguna untuk menghapus pelanggan yang dipilih

        $db->runSQL($sql); //untuk mengirim ke server

        header("location:?f=pelanggan&m=select"); //untuk mengembalikan ke halaman awal
    }

?>

<h3>Delete Item</h3>