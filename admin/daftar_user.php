<?php 
	session_start();
  	if(empty($_SESSION['username_admin']))
  	{
    	header("location:admin_login.php?pesan=belum_login");
  	}

  	include "db.php";
  	$query = mysqli_query($conn,"SELECT * FROM user");

  	$sql_iklan = "SELECT * FROM barang";
	$query_iklan = mysqli_query($conn,$sql_iklan);
	$count_iklan = mysqli_num_rows($query_iklan);

	$sql_user = "SELECT * FROM user";
	$query_user = mysqli_query($conn,$sql_user);
	$count_user = mysqli_num_rows($query_user);
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
		<div class="row fixed-top " style="margin-left: 20%; padding-right: 2%; padding-top: 1%; background: white;">
  			<div class="col-sm-6 ">
    			<div class="card text-white bg-secondary ">
      				<div class="card-body">
        				<h5 class="card-title">Jumlah Iklan</h5>
        				<strong><p class="card-text" style="font-size: 30px"><?php echo "$count_iklan"; ?></p></strong>
      				</div>
    			</div>
  			</div>
  			<div class="col-sm-6">
    			<div class="card text-white bg-dark">
      				<div class="card-body">
        				<h5 class="card-title">Jumlah Pengguna</h5>
        				<strong><p class="card-text" style="font-size: 30px"><?php echo "$count_user"; ?></p></strong>
      				</div>
    			</div>
  			</div>
		</div>
		<br>
		<h3 style="margin-top: 10%">Daftar Pengguna</h3>
      <table  class="table table-striped table-bordered" bgcolor="white">
        <thead class="thead-dark">
          <th>ID User</th>
          <th>Nama</th>
          <th>E-Mail</th>
          <th><center>Contact</center></th>
          <th><center>Alamat</center></th>
          <th></th>
        </thead>
		    <tbody>
		      <?php while ($row = mysqli_fetch_array($query)){ ?>
            <tr>
              <td><?php echo $row["id_user"]; ?></td>
              <td><?php echo $row["nama"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["telp"]; ?></td>
              <td><?php echo $row["alamat"]; ?></td>
              <td><a class="btn btn-primary" href="detail_user.php?id_user=<?php echo $row["id_user"];?>" role="button">Detail</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
	</div>
</body>
</html>