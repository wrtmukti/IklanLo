<?php
  include "open_db.php";
  include "notice_index.php";

  $query = mysqli_query($conn,"SELECT * FROM barang WHERE kategori = 'Elektronik'");
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
			<nav class="navbar fixed-top" style="background-color: #e3ebff;">
				<form class="form-inline">
  					<a class="navbar-brand" href="index.php"><img src="logo.png" width="175" height="30"></a>
    				<input class="form-control mr-sm-2" type="search" placeholder="Search" 
    					aria-label="Search" style="width: 350px; margin-left: 10px;">
   					<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
  				</form>	
  				<ul class="nav justify-content-end" >
  					<li class="nav-item">
  						<a class="nav-link" href="form_iklan.php">
                <button type="button" class="btn btn-outline-info">PASANG IKLAN</button>
              </a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="login.php">
  							<button type="button" class="btn btn-info">LOGIN</button>
  						</a>
  					</li>
  				</ul>
			</nav>

			<nav class="fixed-top" style="background-color: #edf5fc; top: 65px;">
				<div class="nav-item dropdown megamenu-li">
       				<a class="nav-link dropdown-toggle" href="" id="dropdown" data-toggle="dropdown" 
       					aria-haspopup="true" aria-expanded="false">KATEGORI</a>
      				<div class="dropdown-menu megamenu" aria-labelledby="dropdown">
        				<div class="row">
        					<div class="column">
         					<div class="col-sm-6 col-lg-10">
          						<a class="dropdown-item" href="index_kendaraan.php"><h5>Kendaraan</h5></a>
          						<a class="dropdown-item" href="#">Mobil</a>
         						<a class="dropdown-item" href="#">Motor</a>
         					</div>
        					</div>
        					<div class="column">
         					<div class="col-sm-6 col-lg-10">
          						<a class="dropdown-item" href="index_elektronik.php"><h5>Elektronik</h5></a>
          						<a class="dropdown-item" href="#">Komputer</a>
         						<a class="dropdown-item" href="#">Handphone</a>
         						<a class="dropdown-item" href="#">Laptop</a>
         						<a class="dropdown-item" href="#">Aksesoris Gadget</a>
         					</div>
	        				</div>
        					<div class="colomn">
         					<div class="col-sm-6 col-lg-10">
          						<a class="dropdown-item" href="index_perlengkapan.php"><h5>Rumah Tangga</h5></a>
          						<a class="dropdown-item" href="#">Perlengkapan Rumah</a>
         						<a class="dropdown-item" href="#">Dekorasi Rumah</a>
         						<a class="dropdown-item" href="#">Lain-Lain</a>
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


			<h3>Rekomendasi Iklan</h3>

      <?php while ($data = mysqli_fetch_array($query)){ ?>

			<div class="card" style="margin-bottom: 5px;">
        <a class="stretched-link" href="cek_iklan.php?id_iklan=<?php echo $data["id_iklan"];?>
          &kategori=<?php echo $data["kategori"]; ?>"></a>
				<div class="card-body" >
					<div class="row">
            <div class="col-2">
              <img src="img/<?= $data["gambar"]; ?>" width="125px" height="125px">

            </div>
            <div class="col-10">
                <h3><strong><?php echo $data['nama_barang']; ?></strong></h3>
               <div class="row">
                <div class="col-6"><br>
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
               </div>
            </div>
          </div>
				</div>
			</div>

      <?php } ?>
			
		</div>
	</div>

	<div class="footer">
		<div class="ft-1">
				
		</div>

		<div class="ft-2">
				
		</div>
			
	</div>
		

</body>
</html>