<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tblkategori WHERE idkategori=$id";

        $row = $db->getITEM($sql);
    }

?>






<h3>Update Kategori</h3>

<div class="form-group">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" required value="<?php echo $row['kategori'] ?>" class="form-control w-50">
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
        </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        
        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id"; //UPDATE berfungsi untuk meng update kategori tertuju
        // echo $sql;
        $db->runSQL($sql); //untuk mengirim ke server

        header("location:?f=kategori&m=select"); //untuk mengembalikan ke halaman awal
    }
?>