<?php
  include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>IklanLo - Admin</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>$(document).ready(function(){$("#myModal").modal('show');});</script>


	<link rel="stylesheet" type="text/css" href="template.css">
</head>

<body style="background-color: #05031a">
	<div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img src="pic/logo.png" width="175" height="55" style="margin-left: auto;
    				margin-right: auto;">
            </div>
            <div class="modal-body">
               <br>
               <form method="POST" action="login_cek.php">
               		<div class="notice">
						<?php 
							if(isset($_GET['pesan'])){
								$pesan = $_GET['pesan'];
			
								if($pesan == "gagal"){ ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
  											Login Gagal! Username atau Password Salah
  										<button type="button" class="close" data-dismiss="alert" 
  											aria-label="Close">
    										<span aria-hidden="true">&times;</span>
  										</button>
									</div>
									<br>
								<?php } 
								else if($pesan == "belum_login"){ ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
  											Anda Harus Login Terlebih Dahulu !
  										<button type="button" class="close" data-dismiss="alert" 
  											aria-label="Close">
    										<span aria-hidden="true">&times;</span>
  										</button>
									</div>
								<?php } 
								else if($pesan == "logout"){ ?>
									<div class="alert alert-primary alert-dismissible fade show" role="alert">
  											<strong>Logout Berhasil !</strong>
  										<button type="button" class="close" data-dismiss="alert" 
  											aria-label="Close">
    										<span aria-hidden="true">&times;</span>
  										</button>
									</div>
								<?php }
							}
						?>
					</div>

					<div class="input-group mb-3">
  						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Username" name="username_admin">
					</div>
					<div class="input-group mb-3">
  						<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Password" name="pass_admin">
					</div>
					<center><br><input class="btn btn-primary" type="submit" value="LOGIN"></center>
				</form>
                
            </div>
        </div>
    </div>
	</div>
</body>
</html>