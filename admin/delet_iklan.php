<?php
	include "db.php";

	$id_iklan = $_GET["id_iklan"];

	$db = mysqli_query($conn," DELETE FROM barang WHERE id_iklan = '$id_iklan'");
	$db1 = mysqli_query($conn," DELETE FROM kendaraan WHERE id_iklan = '$id_iklan'");
	$db2 = mysqli_query($conn," DELETE FROM perlengkapan WHERE id_iklan = '$id_iklan'");
	$db3 = mysqli_query($conn," DELETE FROM elektronik WHERE id_iklan = '$id_iklan'");
	
	header("location:daftar_iklan.php");
?>