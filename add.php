<?php
require_once 'core/init.php';
require_once 'template/header.php';

if (isset($_POST['submit'])) {
  if (tambahData($_POST['nama'], $_POST['password'], $_POST['umur'])){
    header('Location: index.php');
  }else {
    echo "Gagal Tambah Data";
  }

}

?>

<h3>Tambah Data</h3>
<form action="" method="post">
  Nama :<input type="text" name="nama"><br>
  Password : <input type="text" name="password"><br>
  Umur : <input type="text" name="umur"><br>
  <input type="submit" name="submit" value="Tambah Data">
</form>
