<?php 

    $jumlahdata = $db->rowCOUNT("SELECT iduser FROM tbluser");
    $banyak = 4; // banyaknya tabel
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])){
        $p = $_GET['p'];
        $mulai = ($p * $banyak)-$banyak;
        // 3 = (misalkan p=2 * banyaknya 3)-Banyaknya 3
    }else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbluser ORDER BY user ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    $no = 1+$mulai;

    // var_dump($row);

?>


<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=user&m=insert" role="button">Tambah Data</a>
</div>
<h3>Select user</h3>

<!-- <a href="?f=user&m=insert">Tambah Data</a> -->

<table class="table table-bordered w-50">
    <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Gmail</th>
            <th>Level</th>
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
            $status = "BANNED";
        }
    
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['user'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php echo $r['level'] ?></td>
            <td><a href="?f=user&m=delete&id=<?php echo $r['iduser'] ?>">Delete</a></td>
            <td><a href="?f=user&m=update&id=<?php echo $r['iduser'] ?>"><?php echo $status ?></a></td>
        </tr>
    <?php endforeach ?>
    
    
    </tbody>


</table>

<?php 
for ($i=1; $i<=$halaman; $i++){
    echo '<a href="?f=user&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}

?>