<?php  
	include 'db.php';

	$id_admin = $_POST['id_admin'];
	$nama_admin = $_POST['nama_admin'];
	$email_admin = $_POST['email_admin'];
	$telp_admin = $_POST['telp_admin'];
	$bagian = $_POST['bagian'];
	$username_admin = $_POST['username_admin'];
	$pass_admin = $_POST['pass_admin'];


	//$gambar = $_POST['gambar'];
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	
	//$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

	$query = mysqli_query($conn,"INSERT INTO admin
							Values ('$id_admin', '$nama_admin', '$email_admin', '$telp_admin','$bagian', '$username_admin', '$pass_admin', '$namaFileBaru')");
	
	header("location: home.php");
?>