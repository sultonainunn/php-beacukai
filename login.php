<!DOCTYPE html>
<html>
<head>
	<title>Bea Cukai Jember</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Silahkan Login Terlebih Dahulu untuk Masuk </h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<center>
		<img src="logo.png" alt="" class="img" style="width: 75px;">
		</center>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		<p>Belum memiliki akun? <a href="register.php" style="color:blue">Daftar Sekarang!</a></p>
	</div>
 
 
</body>
</html>