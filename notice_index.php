<!DOCTYPE html>
<html>
<head>
 	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
 	<script>$(document).ready(function(){$("#myModal").modal('show');});</script>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
 	<?php 
        if(isset($_GET['pesan'])){
          $pesan = $_GET['pesan'];
      
            if($pesan == "logout"){ ?>
              <div id="myModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <img src="logo.png" width="175" height="30" style="margin-left: auto; margin-right: auto;">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <img src="pic/yes.png" class="rounded-circle mx-auto d-block" width="200" height="200">
                      <br><p class="text-center">Logout Berhasil</p>
                  </div>
                </div>
            </div>
            </div>
          <?php }
        }
      ?>
</body>
</html>