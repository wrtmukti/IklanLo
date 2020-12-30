<?php  

	include 'open_db.php';

	$id_iklan = $_POST['id_iklan'];
	$id_user = $_POST['id_user'];
	$nama_barang = $_POST['nama_barang'];
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$lokasi = $_POST['lokasi'];

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

	$query = mysqli_query($conn,"INSERT INTO barang
							Values ('$id_iklan', '$id_user', '$nama_barang', '$kategori','$harga', '$lokasi', '$namaFileBaru')");

	if($kategori == "Elektronik"){
	header("location:ktg_elektronik.php?id_iklan=$id_iklan");
		}

	else if ( $kategori == "Kendaraan") {
	header("location:ktg_kendaraan.php?id_iklan=$id_iklan");
	}

	else if ( $kategori == "Perlengkapan") {
	header("location:ktg_perlengkapan.php?id_iklan=$id_iklan");
	}
?>