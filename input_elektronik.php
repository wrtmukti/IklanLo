<?php

	include 'open_db.php';

	$id_iklan = $_POST['id_iklan'];
	$jenis_e = $_POST['jenis_e'];
	$ket_e = $_POST['ket_e'];
	$id_e = $_POST['id_e'];


	$query = mysqli_query($conn,"INSERT INTO elektronik Values ('$id_iklan', '$jenis_e', '$ket_e', '$id_e')")
							   or die (mysqli_error($conn));
	header("location:menu.php");
?>