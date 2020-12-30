<?php 
	session_start();
  	if(empty($_SESSION['username_admin']))
  	{
    	header("location:admin_login.php?pesan=belum_login");
  	}

  	include "db.php";
  	$query = mysqli_query($conn,"SELECT * FROM barang");

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
  			<div class="col-sm-6">
    			<div class="card text-white bg-secondary">
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
		<h3 style="margin-top: 10%">Daftar Iklan</h3>
		
		 <?php while ($data = mysqli_fetch_array($query)){ ?>

			<div class="card" style="margin-bottom: 5px;">
				<div class="card-body" >
					<div class="row">
            			<div class="col-2">
              				<img src="../img/<?= $data["gambar"]; ?>" width="125px" height="125px">
            			</div>
            			<div class="col-10">
                			<h3><strong><?php echo $data['nama_barang']; ?></strong></h3>
               				<div class="row">
                				<div class="col-3"><br>
                  					<h5> Rp. <?php echo $data['harga']; ?><h5/>
                				</div>
                				<div class="col">
                					<table>
                  						<tr>
                    						<td>Kategori</td>
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
                				<div class="col-2">
                    				<a class="btn btn-danger" href="delet_iklan.php?id_iklan=<?php echo $data["id_iklan"]; ?>" role="button">Hapus</a>
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