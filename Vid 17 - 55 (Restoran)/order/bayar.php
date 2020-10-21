<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tblorder WHERE idorder=$id";

        $row = $db->getITEM($sql);
    }

?>






<h3>Payment</h3>

<div class="form-group">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Total</label>
            <input type="text" name="total" required value="<?php echo $row['total'] ?>" class="form-control w-50">
        </div>
        <div class="form-group">
            <label for="">Bayar</label>
            <input type="number" name="bayar" required class="form-control w-50">
        </div>

        <div>
            <input type="submit" name="simpan" value="bayar" class="btn btn-primary">
        </div>
        </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $bayar = $_POST['bayar'];
        $kembali = $bayar-$row['total'];
        
        $sql = "UPDATE tblorder SET bayar='$bayar', kembali=$kembali, status=1 WHERE idorder=$id"; //UPDATE berfungsi untuk meng update kategori tertuju
        if ($kembali < 0) {
            echo "<h3>Anda Miskin?</h3>";
        }else{
             $db->runSQL($sql); //untuk mengirim ke server

             header("location:?f=order&m=select"); //untuk mengembalikan ke halaman awal
        }
       }
?>
