<?php

require_once"../_config/config.php"; 

//Boolean untuk mengedit data
if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $ket = trim(mysqli_real_escape_string($con,$_POST['ket']));
    mysqli_query($con, "UPDATE tb_siswa SET ket_siswa = '$ket' WHERE id_siswa = '$id'") or die (mysqli_error($con)) ;
  echo "UPDATE tb_siswa SET ket_siswa = '$ket' WHERE id_siswa = '$id'";
  echo "<script>window.location='data.php';</script>";
}

?> 