<?php

	include 'open_db.php';

	$id_user = $_POST['id_user'];
	$username_user = $_POST['username_user'];
	$pass_user = $_POST['pass_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];

	$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username_user='$username_user'"));

	if(isset($_POST['simpan'])){
		if(empty($username_user) or empty($pass_user) or empty($nama) or empty($email) or empty($alamat) or empty($telp)){
			header("location: form_register.php?pesan=kosong");
		}
		else if ($cek > 0) {
			header("location: form_register.php?pesan=sama");
		}
		else{
			$query = mysqli_query($conn,"INSERT INTO user
							VALUES ('$id_user', '$username_user', '$pass_user', '$nama','$email', '$alamat', '$telp')")
							   or die (mysqli_error($conn));
			header("location: login.php");
		}
	}
	?>