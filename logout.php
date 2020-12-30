<?php 
	session_start(); //mengaktifkan session
	session_destroy(); //mengahapus semua session

	//mengalihkan halaman sambil mengirim pesan logout
	header ("location:index.php?pesan=logout");
	
 ?>