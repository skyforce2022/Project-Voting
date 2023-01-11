<?php 

	require '../config.php';

	//cek tombol sudah ditekan atau belum
	if(isset($_POST["regis"])) {

		if( regis($_POST) > 0 ) {
			echo "<script>
			alert('User baru berhasil ditambahkan')
			</script>";
		} else {
			echo mysqli_error($connect);
		}
	}



?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
 
	<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

	<h1><marquee behavior="smooth" direction=""> Register Terlebih Dahulu</marquee></h1>
 
	<div class="kotak_login">
        <center>
            <img src="../assets/images/logo-ulbi.png" alt="" width="200" height="80">
        </center>
		<p class="tulisan_login">Register Here</p>
 
		<form action="#" method="post">
			<label for="username">Username</label>
			<input type="text" name="username" class="form_login" placeholder="enter your username..." id="username" required="required">
 
			<label for="password">Password</label>
			<input type="password" name="password" class="form_login" placeholder="enter your password..." id="password" required="required">

			<label for="confirm-password">Confirm Password</label>
			<input type="password" name="confirm_password" class="form_login" placeholder="confirm your password..." id="confirm-password" required="required">
 
			<input type="submit" class="tombol_login" name="regis" value="Regis">
 
            <p align="center">Already have an account? <a href="login.php">Login</a> here</p>
            <hr>
			<center>
				<a class="link" href="../index.php">Back</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>