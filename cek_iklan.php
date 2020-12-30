<?php
	$id_iklan = $_GET["id_iklan"];
	$kategori = $_GET["kategori"];

	if($kategori == "Elektronik"){
	header("location:iklan_elektronik.php?id_iklan=$id_iklan");
		}

	else if ( $kategori == "Kendaraan") {
	header("location:iklan_kendaraan.php?id_iklan=$id_iklan");
	}

	else if ( $kategori == "Perlengkapan") {
	header("location:iklan_perlengkapan.php?id_iklan=$id_iklan");
	}
?>