<?php
error_reporting(0);
$isi=htmlentities($_GET['id']);
$halaman="$isi.php";
	if(!file_exists ($halaman)){
		include"beranda.php";
	}
	else{
		include"$halaman";
	}
?>