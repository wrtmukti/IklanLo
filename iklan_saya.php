<?php
  include "open_db.php";

  session_start();
  if(empty($_SESSION['username_user']))
  {
    header("location:login.php?pesan=belum_login");
  }
  $session_user=$_SESSION['username_user'];

  $sql = "SELECT * FROM user 
      INNER JOIN barang ON user.id_user = barang.id_user 
      WHERE user.username_user='$session_user'";
  $query = mysqli_query($conn, $sql);

  $sql_u = "SELECT * FROM user WHERE username_user='$session_user'";
  $query_u = mysqli_query($conn, $sql_u);
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

      <!--Profil -->
      <br><h3>Profil</h3>
      <?php while ($row = mysqli_fetch_array($query_u)){ ?>
        <div class="card bg-light">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <img src="pic/profil1.png" class="rounded-circle mx-auto d-block" 
                  width="300" height="300">
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
      <br><br><h3>Iklan Saya</h3>
      <?php while ($data = mysqli_fetch_array($query)){ ?>

      <div class="card" style="margin-bottom: 5px;">
        <div class="card-body">
          <div class="row">
            <div class="col-2">
              <img src="img/<?= $data["gambar"]; ?>" width="125px" height="125px">
              <a class="stretched-link" 
                  href="cek_iklan.php?id_iklan=<?php echo $data["id_iklan"];?>&kategori=<?php echo $data["kategori"];?>">
              </a>
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
                    <a class="btn btn-success" href="del_iklan.php?id_iklan=<?php echo $data["id_iklan"]; ?>" role="button">Terjual</a>
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