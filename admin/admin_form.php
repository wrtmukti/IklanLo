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
		<div class="card">
		<div class="card-header">
			<center><h3>Form Admin</h3></center>
		</div>
  		<div class="card-body">
  		<form method="POST" action="admin_register.php" enctype="multipart/form-data">
    		<div class="input-group mb-3">
				<div class="input-group-prepend">
    				<span class="input-group-text">ID Admin</span>
  				</div>
  				<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly name="id_admin" value="<?php echo rand(100000000,999999999)?>">
			</div>
			<div class="form-group">
    			<label for="nama">Nama</label>
    			<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_admin">
  			</div>
  			<div class="form-group">
    			<label for="mail">E-Mail</label>
    			<input type="text" class="form-control" id="mail" placeholder="example@gmail.com" name="email_admin">
  			</div>
  			<div class="form-group">
    			<label for="telp">No. Telepon</label>
    			<input type="text" class="form-control" id="telp" placeholder="ex: 082212341234" name="telp_admin">
  			</div>
  			<div class="form-group">
    			<label for="kategori">Divisi</label>
                	<select class="form-control" id="kategori" name="bagian">
                    	<option>Database</option>
                        <option>Front-End</option>
                        <option>Back-End</option>
                        <option>Full-Stack</option>
                        <option>Moderator</option>
                    </select>
  			</div>
  			<div class="form-row">
    			<div class="form-group col-md-6">
      				<label for="user">Username Admin</label>
    				<input type="text" class="form-control" id="user" placeholder="Username" name="username_admin">
    			</div>

    			<div class="form-group col-md-6">
      				<label for="pass">Password Admin</label>
     				<input type="text" class="form-control" id="user" placeholder="Password" name="pass_admin">
    			</div>
  			</div>
  			<div class="form-group">
                <label>Foto Profil : <br></label>
                	<input type="file" name="gambar">
            </div>
  			<center><br><input class="btn btn-primary" type="submit" name="simpan" value="Simpan"><br></center>
  		</form>		
  		</div>
		</div>
	</div>
</body>
</html>