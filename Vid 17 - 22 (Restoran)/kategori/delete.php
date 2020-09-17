<?php 
    require_once "../function.php";

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/web-php-2/Vid%2017%20-%2022%20(Restoran)/kategori/select.php");
?>