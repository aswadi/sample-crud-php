<?php
require_once 'core/init.php';
require_once 'template/header.php';

  if (isset($_POST['submit'])) {
    if (editData($_POST['nama'], $_POST['password'], $_POST['umur'], $_GET['id'])){
      header('Location: index.php');
    }else {
      echo "Gagal edit Data";
    }
  }
  $result=tampil_per_id($_GET['id']);
  while ($row=mysqli_fetch_assoc($result)) {
?>
<h3>Edit Data</h3>
<form action="" method="post">
  Nama :<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
  Password : <input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
  Umur : <input type="text" name="umur" value="<?php echo $row['umur']; ?>"><br>
  <input type="submit" name="submit" value="Edit Data">
</form>
<?php } ?>
