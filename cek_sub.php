<?php
	$kategori = $_GET["kategori"];
	$sub = $_GET["sub"];

	if($kategori == "Elektronik"){
	header("location:sub_elektronik.php?sub=$sub");
		}

	else if ( $kategori == "Kendaraan") {
	header("location:sub_kendaraan.php?sub=$sub");
	}

	else if ( $kategori == "Perlengkapan") {
	header("location:sub_perlengkapan.php?sub=$sub");
	}
?>