<?php 
	session_start();
	$query = new mysqli('localhost','root','','new_olx2');

	$username_admin = $_POST['username_admin'];
	$pass_admin = $_POST['pass_admin'];
	
	$data = mysqli_query($query, "SELECT * FROM admin where username_admin='$username_admin' and pass_admin='$pass_admin'")
						OR die(mysqli_error($query));

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$_SESSION['username_admin'] = $username_admin;
		$_SESSION['status'] = "login";

		header("location:home.php");
	}

	else {
		header ("location:admin_login.php?pesan=gagal");

	}
 ?>