<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Bea Cukai Jember</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body style="background-color: #ebf9fb;">

<br>
<h1>Silahkan melakukan pendaftaran disini </h1>

<div class="kotak_login mt-5">
		<p class="tulisan_login">Silahkan daftar</p>

        <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
			<br>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label>Nomer HP</label>
            <input type="text" class="form-control" name="no_hp">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="hidden" value="pengguna" class="form-control" name="level">
        </div>
        <button class="btn btn-primary mt-2" name="save">Simpan</button>
		</form> <br>
		<p>Sudah memiliki akun? <a href="login.php" style="color:blue">Login Sekarang!</a></p>
	</div>

<?php
if (isset($_POST['save'])) {

    
    if ($sudahada == 1) {
        echo "<script>alert('Data sudah digunakan. Silahkan menggunakan data lain.');</script>";
        echo "<script>location='daftar.php';</script>";
    } else {
        $koneksi->query("INSERT INTO user (nama,alamat,no_hp,username,password,level) VALUES ('$_POST[nama]', '$_POST[alamat]', '$_POST[no_hp]', '$_POST[username]', '$_POST[password]', '$_POST[level]')");
        
        echo "<script>alert('Berhasil mendaftar. Silahkan login.');</script>";
        echo "<script>location='login.php';</script>";
    }
}
?>
    
</body>
</html>

