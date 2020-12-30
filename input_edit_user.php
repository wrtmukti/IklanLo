<?php
	include 'open_db.php';

	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];


	if(isset($_POST['simpan'])){
		if(empty($nama) or empty($email) or empty($alamat) or empty($telp)){
			header("location: edit_user.php?pesan=kosong");
		}

		else{
			$sql = "UPDATE user SET 
				nama='$nama',email='$email',alamat='$alamat',telp='$telp' 
				WHERE id_user='$id_user' ";
			$query = mysqli_query($conn, $sql);
			header("location:menu.php?pesan=berhasil");
		}
	}
?>