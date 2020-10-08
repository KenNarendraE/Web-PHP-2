<?php 

    $jumlahdata = $db->rowCOUNT("SELECT idpelanggan FROM tblpelanggan");
    $banyak = 3; // banyaknya tabel
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])){
        $p = $_GET['p'];
        $mulai = ($p * $banyak)-$banyak;
        // 3 = (misalkan p=2 * banyaknya 3)-Banyaknya 3
    }else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tblpelanggan ORDER BY pelanggan ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    $no = 1+$mulai;

    // var_dump($row);

?>


<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=pelanggan&m=insert" role="button">Tambah Data</a>
</div>
<h3>Select Pelanggan</h3>

<!-- <a href="?f=pelanggan&m=insert">Tambah Data</a> -->

<table class="table table-bordered w-70">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Status</th>
        </tr>
    
    
    </thead>

    <tbody>
    <?php foreach($row as $r): ?>
        <?php 
        
            if ($r['aktif']==1) {
                $status = "AKTIF";
            }else{
                $status = "NON AKTIF";
            }
        
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['pelanggan'] ?></td>
            <td><?php echo $r['alamat'] ?></td>
            <td><?php echo $r['telp'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><a href="?f=pelanggan&m=delete&id=<?php echo $r['idpelanggan'] ?>">Delete</a></td>
            <td><a href="?f=pelanggan&m=update&id=<?php echo $r['idpelanggan'] ?>"><?php echo $status ?></a></td>
        </tr>
    <?php endforeach ?>
    
    
    </tbody>


</table>

<?php 
for ($i=1; $i<=$halaman; $i++){
    echo '<a href="?f=pelanggan&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}

?>