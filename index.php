<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<form method="post" action="cek_login.php">
  <div class="wrap">
		<div class="avatar">
      <img src="image/logo_usu.png">
		</div>
		<input type="text" name="nim" placeholder="NIM" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="password" placeholder="password" required>
		
		<button type="submit" value="login">Login</button>
	</div>
</form>

  <script src="js/index.js"></script>

</body>

</html>