<?php
require_once"../_config/config.php";    
//query untuk menghapus data
mysqli_query($con, "DELETE from tb_siswa WHERE  id_siswa= '$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>