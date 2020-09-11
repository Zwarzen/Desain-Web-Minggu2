<?php

	//setting default timezone dan pemanggil session start
	//date_default_timezone_get('Asia/Jakarta');

	//session_start();


	//koneksi
	/*
	- Prosedur koneksi untuk menghubungkan website dengan database
	- initial state : $con
	- final state : echo mysqli_connect_error
	- author : risang daniswara
	- ver : 1.0
	- Date Mod : 24 Juli 2019
	*/
	/*$con =mysqli_connect('localhost','root','','absensi');*/
	if(mysqli_connect_error()) {
	    echo mysqli_connect_error();
	}
	 

	//fungsi base_url
	/*
	- fungsi base_url untuk menghubungkan laman dengan folder utama agar mudah dalam pengembangan bootstrap atau design editing lainnya
	- initial state : base_url
	- final state : $base_url
	- author : risang daniswara
	- ver : 1.0
	- Date Mod : 24 Juli 2019
	*/
	function base_url($url = null){
	    $base_url = "https://localhost/ti2d_risangDaniswara";
	    if($url != null){    
	        return $base_url."/".$url;
	    }
	    else{
	        return $base_url;
	    }
	}
?>