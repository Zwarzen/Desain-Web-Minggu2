<?php
require_once "../_config/config.php";

//Logout
/*
	- fungsi looping logout adalah untuk menjaga keamanan laman agar tidak bisa kembali kearah laman utama oleh pihak yang tidak berwajib
	- author : risang daniswara
	- ver : 1.0
	- Date Mod : 24 Juli 2019
*/
unset ($_SESSION['user']);
echo "<script>window.location='".base_url('auth/login.php')."';</script>";
?>