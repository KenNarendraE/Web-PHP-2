<div style="margin:auto; width:900px;">
<h3><a href="http://localhost/web-php-2/Vid%2017%20-%2022%20(Restoran)/kategori/insert.php">Masukan Data</a></h3>
<?php 

    require_once "../function.php";

    if (isset($_GET['update'])) {
        $id = $_GET['update'];
        require_once "update.php"; 
    }

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        require_once "delete.php"; 
    }

    echo '<br>';

    $sql = "SELECT idkategori FROM tblkategori";

    $result = mysqli_query($koneksi, $sql);

    $jumlahdata = mysqli_num_rows($result);

    $mulai;
    $banyak = 3; // banyaknya tabel
    $halaman = ceil($jumlahdata / $banyak);
    
    for ($i=1; $i<=$halaman; $i++){
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }

    echo '<br> <br>';

    if (isset($_GET['p'])){
        $p = $_GET['p'];
        $mulai = ($p * $banyak)-$banyak;
        // 3 = (misalkan p=2 * banyaknya 3)-Banyaknya 3
    }else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tblkategori LIMIT $mulai,$banyak";

    $result = mysqli_query($koneksi, $sql);

    $jumlah = mysqli_num_rows($result);

    echo '<table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Hapus</th>
        <th>Update</th>
    </tr>';

    $no=$mulai+1;

    if ($jumlah > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$row['idkategori'].'</td>';
            echo '<td>'.$row['kategori'].'</td>';
            echo '<td><a href="?hapus='.$row['idkategori'].'">'.'Hapus'.'</a></td>';
            echo '<td><a href="?update='.$row['idkategori'].'">'.'update'.'</a></td>';
            echo '</tr>';
        }
    }

    echo '</table>';


?>
</div>

