<?php

//Variabel database
    // Membuat koneksi ke Database
    $konek = mysqli_connect("localhost", "root", "", "dbawos");
	if(mysqli_connect_error()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>