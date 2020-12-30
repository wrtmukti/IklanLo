<?php
  include "db.php";

  session_start();
  if(empty($_SESSION['username_admin']))
  {
    header("location:admin_login.php?pesan=belum_login");
  }
  $session_admin=$_SESSION['username_admin'];
  $sql = "SELECT * FROM admin WHERE username_admin='$session_admin'";

  $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>IklanLo - Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<div class="menu">
		<img src="pic/logo.png" width="195" height="60" style="margin-left: auto; margin-right: auto;">

		<ul class="list-group" style="margin-top: 30px;">
  			<a href="home.php" class="list-group-item list-group-item-action">Profil</a>
  			<a href="daftar_iklan.php" class="list-group-item list-group-item-action">Daftar Iklan</a>
  			<a href="daftar_user.php" class="list-group-item list-group-item-action">Daftar Pengguna</a>
  			<a href="admin_form.php" class="list-group-item list-group-item-action">Tambah Admin</a>
		</ul><br>
		<center>
			<a href="logout_admin.php" class="btn btn-dark btn-block" role="button">LOGOUT</a>
		</center>
	</div>

	<div class="content">
	<br><h3>Profil</h3>
      <?php while ($row = mysqli_fetch_array($query)){ ?>
        <div class="card bg-light">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <img src="img/<?= $row["gambar"]; ?>" class="rounded mx-auto d-block" 
                  width="300" height="300">
              </div>
              <div class="col" style="padding-top: 40px;">
                <table>
                  <tr>
                    <td><strong>ID Admin</strong></td>
                    <td>&emsp;<?php echo $row["id_admin"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Nama</strong></td>
                    <td>&emsp;<?php echo $row["nama_admin"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail</strong></td>
                    <td>&emsp;<?php echo $row["email_admin"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>No. Telepon</strong></td>
                    <td>&emsp;<?php echo $row["telp_admin"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Divisi</strong></td>
                    <td>&emsp;<?php echo $row["bagian"] ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
	</div>
</body>
</html>