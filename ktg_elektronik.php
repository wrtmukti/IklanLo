<?php
   
    session_start();
    if(empty($_SESSION['username_user']))
  	{
    	header("location:login.php?pesan=belum_login");
 	}
    $id_iklan = $_GET["id_iklan"];
    include "open_db.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>IklanLo - Tempatnya Iklan Online</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
      crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
      crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
      crossorigin="anonymous">
  </script>

  <link rel="stylesheet" type="text/css" href="template.css">
</head>
	<div class="container">
		<div class="header">
			<nav class="navbar fixed-top" style="background-color: #7db7e3;">
        <form class="form-inline" method="GET" action="menu_s.php">
            <a class="navbar-brand" href="menu.php"><img src="logo.png" width="175" height="30"></a>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="cari" 
              aria-label="Search" style="width: 350px; margin-left: 10px;">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form> 
          <ul class="nav justify-content-end" >
            <li class="nav-item">
              <a class="nav-link" href="form_iklan.php">
                <button type="button" class="btn btn-outline-dark">PASANG IKLAN</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
               <button type="button" class="btn btn-dark" data-toggle="modal" 
                data-target="#notice_user">
                  <img src="pic/person.png" width="20" height="20">
                </button>
              </a>
            </li>
          </ul>
      </nav>

      <nav class="fixed-top" style="background-color: #b2d9f7; top: 65px;">
        <div class="nav-item dropdown megamenu-li">
              <a class="nav-link dropdown-toggle" href="" id="dropdown" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">KATEGORI</a>
              <div class="dropdown-menu megamenu" aria-labelledby="dropdown">
                <div class="row">
                  <div class="column">
                  <div class="col-sm-6 col-lg-10">
                      <a class="dropdown-item" href="menu_kategori.php?kategori=Kendaraan"><h5>Kendaraan</h5></a>
                      <a class="dropdown-item" href="cek_sub_menu.php?kategori=Kendaraan&sub=Mobil">Mobil</a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Kendaraan&sub=Motor">Motor</a>
                  </div>
                  </div>
                  <div class="column">
                  <div class="col-sm-6 col-lg-10">
                    <a class="dropdown-item" href="menu_kategori.php?kategori=Elektronik"><h5>Elektronik</h5></a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Elektronik&sub=Komputer">Komputer</a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Elektronik&sub=Handphone">Handphone</a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Elektronik&sub=Laptop">Laptop</a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Elektronik&sub=Aksesoris Gadget">Aksesoris Gadget</a>
                  </div>
                  </div>
                  <div class="colomn">
                  <div class="col-sm-6 col-lg-10">
                      <a class="dropdown-item" href="menu_kategori.php?kategori=Perlengkapan"><h5>Rumah Tangga</h5></a>
                      <a class="dropdown-item" href="cek_sub_menu.php?kategori=Perlengkapan&sub=Perlengkapan Rumah">Perlengkapan Rumah</a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Perlengkapan&sub=Dekorasi Rumah">Dekorasi Rumah</a>
                    <a class="dropdown-item" href="cek_sub_menu.php?kategori=Perlengkapan&sub=Lain - lain">Lain-Lain</a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
      </nav>
		</div>

		<div class="main">
		  <!--Notive User Menu -->
          <div class="modal fade" id="notice_user" tabindex="-1" role="dialog" 
              aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 style="margin-left: auto; margin-right;">
                      <strong>Hi, <?php echo $_SESSION['username_user'] ?></strong>
                  </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button><br>
                </div>
                <div class="modal-body">
                  <img src="pic/profil1.png" class="rounded-circle mx-auto d-block" width="200" height="200"><br>
                  <a href="iklan_saya.php" class="btn btn-outline-info btn-lg btn-block">Iklan Saya</a><br>
                  <a href="edit_user.php" class="btn btn-outline-info btn-lg btn-block">Edit Profil</a><br>
                  <a href="logout.php" class="btn btn-info btn-lg btn-block">Logout</a>
                </div>
            </div>
          </div>
          </div>

          <div class="card" style="">
          	<div class="card-header text-center">
                <p class="text-center"><h3>Data Elektronik</h3></p>
            </div>

            <div class="card-body">
            	<form method="POST" action="input_elektronik.php">
            		<div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">ID Iklan</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly name="id_iklan" value="<?php echo $id_iklan; ?>">
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">ID Elektronik</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly name="id_e" value="<?php echo rand(100000000,999999999)?>">
                    </div>

                    <div class="form-row">
                    	<div class="form-group col-md-6">
                        <label for="kategori">Kategori</label>
                          <select class="form-control" id="kategori" name="jenis_e">
                            <option>Komputer</option>
                            <option>Handphone</option>
                            <option>Laptop</option>
                            <option>Aksesoris Gadget</option>
                            <option>Lain - lain</option>
                          </select>
                      	</div>
                    </div>

                    <div class="form-group">
    					<label for="keterangan">Keterangan</label>
    					<textarea class="form-control" id="keterangan" rows="5" name="ket_e"></textarea>
  					</div>

  					 <center><br><input class="btn btn-primary" type="submit" name="simpan" value="Simpan"><br></center>

            	</form>
            </div>
          </div>

		</div>
	</div>

	<div class="footer">
    <div class="ft-1" style="padding-top: 5px;">
      <div class="row justify-content-md-center" style="color: white;">
        <div class=" col-lg-3">
          <ul style="list-style: none">
            <li><h5><strong>IklanLo</strong></h5></li>
            <li>Tentang IklanLo</li>
            <li>Berita Terbaru</li>
            <li>IklanLo Group</li>
            <li>Kebijakan</li>
            <li>Donasi</li>
          </ul>
        </div>
        <div class="col-md-auto col-lg-3">
            <ul style="list-style: none">
            <li><h5><strong>Informasi</strong></h5></li>
            <li>FAQ</li>
            <li>Creator</li>
            <li>Saran</li>
          </ul>
        </div>
        <div class="col-lg-3">
           <ul style="list-style: none">
            <li><h5><strong>Hubungi Kami</strong></h5></li>
            <li>Customer Care</li>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Intagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="ft-2">
      <center>
          <font size="2" color="white">
            &copy;Copyright Jagonya Iklan Baris | 2019 | Alright reserved
          </font>
        </center>
    </div>
      
  </div>

<body>

</body>
</html>