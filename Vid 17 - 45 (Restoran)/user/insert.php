<h3>Insert User</h3>

<div class="form-group">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama user</label>
            <input type="text" name="user" required placeholder="isi user" class="form-control w-50">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="Email" class="form-control w-50">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="password" class="form-control w-50">
        </div>

        <div class="form-group">
            <label for=""> Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="password" class="form-control w-50">
        </div>

        <div class="form-group">
            <label for="">Level</label><br>
            <select name="level" id="level">
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
                <option value="koki">Koki</option>
            
            </select>
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
        </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)"; //INSERT digunakan untuk menambahkan user baru
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        }else{
            echo "<h3>YOUR PASSWORD IS INCORRECT</h3>";
        }
        
    }
?>