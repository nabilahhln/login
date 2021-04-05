<?php
	try{
		require_once 'includes/koneksi_PDO.php';
	     } catch (Exception $e){
	$error = $e->getMessage();
	}
      ?>
<!DOCTYPE html>
<html>
<body>
      <div class="col-md-6 col-md-offset-4">
        <div class="row">
          <?php

          
          $username = $_POST['pengguna'];
          $password = $_POST['sandi'];
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          if ($db){
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO akun (username,password,nama,email)
            VALUES ('$username', '$password', '$nama','$email')";
            
            $db->exec($sql);
            echo "<h2>Registrasi Akun Anda Berhasil</h2>";
          } elseif (isset($error)){
                echo "Terjadi kesalahan: $error";
            }

          ?>


  </div>
</div>
</body>
</html>