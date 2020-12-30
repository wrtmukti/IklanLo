<?php

	include 'open_db.php';

	$id_iklan = $_POST['id_iklan'];
	$id_p = $_POST['id_p'];
	$jenis_p = $_POST['jenis_p'];
	$kondisi_p = $_POST['kondisi_p'];
	$ket_p = $_POST['ket_p'];
	


	$query = mysqli_query($conn,"INSERT INTO perlengkapan Values ('$id_iklan', '$id_p','$jenis_p', '$kondisi_p', '$ket_p')")
			or die (mysqli_error($conn));
	header("location:menu.php");

	?>