<?php
	$kategori = $_GET["kategori"];
	$sub = $_GET["sub"];

	if($kategori == "Elektronik"){
	header("location:subm_elektronik.php?sub=$sub");
		}

	else if ( $kategori == "Kendaraan") {
	header("location:subm_kendaraan.php?sub=$sub");
	}

	else if ( $kategori == "Perlengkapan") {
	header("location:subm_perlengkapan.php?sub=$sub");
	}
?>