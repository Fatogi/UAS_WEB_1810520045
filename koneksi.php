<?php 
	$host = "localhost";
	$username = "root";
	$password ="";
	$database= "blog";

	$koneksi = mysqli_connect($host, $username, $password, $database);
		if (!$koneksi) {
			echo mysqli_error($koneksi);
		}


 ?>