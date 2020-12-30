<?php

	include 'open_db.php';

	$id_iklan = $_POST['id_iklan'];
	$jenis_k = $_POST['jenis_k'];
	$tahun = $_POST['tahun'];
	$ket_k = $_POST['ket_k'];
	$id_k = $_POST['id_k'];


	$query = mysqli_query($conn,"INSERT INTO kendaraan Values ('$id_iklan','$jenis_k', '$tahun', '$ket_k', '$id_k')")
							   or die (mysqli_error($conn));
	header("location:menu.php");
?>