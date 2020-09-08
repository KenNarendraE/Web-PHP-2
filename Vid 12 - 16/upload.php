<form action="" method="post" enctype="multipart/form-data">
    Pilih gambar yang akan di upload:
    <input type="file" name="upload">
    <input type="submit" name="kirim" value="simpan">
</form>

<?php 

    if (isset($_POST['kirim'])) {
        // $file = $_FILES['upload'];

        // foreach ($file as $key => $value) {
        //     echo $key. '=>'. $value;
        //     echo '<br>';
        // }

        $name = $_FILES['upload']['name'];
        $tmp = $_FILES['upload']['tmp_name'];

        echo $name. ' = '. $tmp;

        move_uploaded_file($tmp,'gambar/'.$name);

    }



?>

