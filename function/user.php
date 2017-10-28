<?php
function run($query)
{
  global $link;
  if (mysqli_query($link, $query)){
    return true;
  }else {
    return false;
  };

}

function tambahData($nama, $password, $umur)
{
  $query = "INSERT INTO user (nama, password, umur)
            values ('$nama', '$password', $umur)";
  return run($query);
}

function tampil()
{
  global $link;
  $query = "SELECT * FROM user";
  $result = mysqli_query($link, $query) or die('gagal tampil');

  return $result;
}

function tampil_per_id($id)
{
  global $link;
  $query = "SELECT * FROM user WHERE id = $id";
  $result = mysqli_query($link, $query) or die('gagal tampil');

  return $result;
}

function hapusData($id)
{
  $query = "DELETE FROM user WHERE id = $id";
  return run($query);
}

function editData($nama, $password, $umur, $id)
{
  $query = "UPDATE user SET nama = '$nama', password = '$password', umur = $umur WHERE id = $id";
  return run($query);
}
 ?>
