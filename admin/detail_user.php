<?php
  include "db.php";

  session_start();
  if(empty($_SESSION['username_admin']))
  {
    header("location:admin_login.php?pesan=belum_login");
  }

  $id_user=$_GET["id_user"];
  $sql = "SELECT * FROM user
          INNER JOIN barang ON user.id_user = barang.id_user 
          WHERE user.id_user='$id_user'";
  $query = mysqli_query($conn, $sql);

  $sql_u = "SELECT * FROM user WHERE id_user='$id_user'";
  $query_u = mysqli_query($conn, $sql_u);
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
	   <br><h3>Profil User</h3>
      <?php while ($row = mysqli_fetch_array($query_u)){ ?>
        <div class="card bg-light">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <img src="pic/profil1.png" class="rounded-circle mx-auto d-block" 
                  width="200" height="200">
              </div>
              <div class="col" style="padding-top: 40px;">
                <table>
                  <tr>
                    <td><strong>Nama</strong></td>
                    <td>&emsp;<?php echo $row["nama"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail</strong></td>
                    <td>&emsp;<?php echo $row["email"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>No. Telepon</strong></td>
                    <td>&emsp;<?php echo $row["telp"] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Alamat</strong></td>
                    <td>&emsp;<?php echo $row["alamat"] ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

      <!--Isi -->
      <br><br><h4>Iklan Yang Dijual</h4>
      <?php while ($data = mysqli_fetch_array($query)){ ?>

      <div class="card" style="margin-bottom: 5px;">
        <div class="card-body">
          <div class="row">
            <div class="col-2">
              <img src="../img/<?= $data["gambar"]; ?>" width="125px" height="125px">
            </div>
            <div class="col-10">
              <h3><strong><?php echo $data['nama_barang']; ?></strong></h3>
               <div class="row">

                <div class="col-4"><br>
                  <h5> Rp. <?php echo $data['harga']; ?><h5/>
                </div>

                <div class="col">
                <table>
                  <tr>
                    <td>Katagori</td>
                    <td>&emsp;<?php echo $data['kategori']; ?></td>
                  </tr>
                  <tr> </tr>
                  <tr>
                    <td>Lokasi</td>
                    <td>&emsp;<?php echo $data['lokasi']; ?></td>
                  </tr>
                </table>
                </div>

                <div class="col">
                  <table>
                    <tr>
                      <td>ID Iklan</td>
                        <td>&emsp;<?php echo $data['id_iklan']; ?></td>
                      </tr>
                      <tr> </tr>
                      <tr>
                        <td>ID User</td>
                        <td>&emsp;<?php echo $data['id_user']; ?></td>
                      </tr>
                  </table>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
	</div>
</body>
</html>