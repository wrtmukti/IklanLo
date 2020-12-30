<?php
  include "open_db.php";

  session_start();
  if(empty($_SESSION['username_user']))
  {
    header("location:login.php?pesan=belum_login");
  }

  $id_iklan = $_GET["id_iklan"];
  $sql = "SELECT * FROM barang
      INNER JOIN kendaraan ON barang.id_iklan = kendaraan.id_iklan
      INNER JOIN user ON barang.id_user = user.id_user
      WHERE barang.id_iklan = '$id_iklan'";
  $query = mysqli_query($conn, $sql);
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

<body>
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

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" 
				style="margin-bottom: 20px;">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  				</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img src="pic/image1.jpeg" class="d-block w-100">
   					</div>
    				<div class="carousel-item">
      					<img src="pic/image2.jpeg" class="d-block w-100">
    				</div>
    				<div class="carousel-item">
      					<img src="pic/image3.png" class="d-block w-100">
    				</div>
  				</div>
  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
			</div>

      <!--Notive Login -->
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

      <!-- Content --> 
      <?php while ($data = mysqli_fetch_array($query)){ ?>
			<div class="row" style="height: 520px;">
    			<div class="col-8">
    				<div class="card" style="height: 500px;">
    					<div class="card-body" >
                <strong><h3><?php echo $data['nama_barang']; ?></h3></strong><br>
                <div class="row">
                  <img src="img/<?= $data["gambar"]; ?>" class="rounded mx-auto d-block" width="500px" height="400px">
                </div>
      				</div>
      			</div>
    			</div>
    			<div class="col">
    				<div class="card" style="height: 500px;">
    					<div class="card-body" >
      					<strong>Detail Penjual</strong><br><br>
                <img src="pic/profil1.png" class="rounded-circle mx-auto d-block" width="150" height="150"><br>
                <div class="row">
                  <div class="col-4">Nama</div>
                  <div class="col"><?php echo $data['nama']; ?></div>
                </div>
                
                <div class="row">
                  <div class="col">
                    <br>Alamat<br>
                    <?php echo $data['alamat']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <br>E-Mail<br>
                    <?php echo $data['email']; ?>
                  </div>
                </div>
                <br>

                    <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                    <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Hubungi Penjual</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"> <center>
                    <div class="col"><?php echo $data['nama']; ?></div></center></h5>
                    
                    </div>
                    <div class="modal-body"> <center>
                    <div class="col"><?php echo $data['telp']; ?></div></center>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <br>

      				</div>
      			</div>
    			</div>
  			</div>
  			<div class="row">
  				<div class="card" style="margin-bottom: 10px; width: 100%; height: auto;">
  					<div class="card-body" >
  					<strong>Detail</strong><br>
              <div class="row">
                <div class="col-4">Harga</div>
                <div class="col-4"> Rp. <?php echo $data['harga']; ?></div>
             </div>
  					 <div class="row">
                <div class="col-4">Jenis</div>
                <div class="col-4"><?php echo $data['jenis']; ?></div>
             </div>
             <div class="row">
                <div class="col-4">Keluaran tahun</div>
                <div class="col-4"><?php echo $data['tahun']; ?></div>
             </div>
  					</div>
  				</div>
        </div>
        <div class="row">
  				<div class="card" style="width: 100%; height: auto;">
  					<div class="card-body" >
  					 <strong>Deskripsi</strong><br>
  					 <?php echo $data['ket_k']; ?>
  				  </div>
  				</div>
  			</div>
        <?php } ?>
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
		

</body>
</html>