<form action="" method="post">
    Kategori :
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>


<?php 
    require_once "../function.php";
    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
        $result = mysqli_query($koneksi, $sql);
        header("location:http://localhost/web-php-2/Vid%2017%20-%2022%20(Restoran)/kategori/select.php");
    }





?>