<?php
//include('session.php');
include('config.php');
?>

<!-- Membuat postingan -->
	<div class="row">
	<div class="col-md-8col-md-offset-4">
	<div id="post">
	
	<form action="" method="POST">
	<table>
		<tr>
             <td>
                <button type="submit" name="daftarakun" class="btn btn-primary"> Daftar Akun </button>
				</td>
              <td>
                <button type="submit" name="daftarposting" class="btn btn-primary">Daftar Posting</button>
				</td>
			</tr>
		</table>
	</form>
	
<?php
	if(isset($_POST['daftarakun'])){
		$query = $db->prepare("SELECT * FROM akun");
		$query->execute();
		$result = $query;
		
		echo "<table class='table table-hover'>";
		echo
	"<tr><th>Username</th><th>Password</th><th>Nama</th>
	<th>Email</th>";
	
	foreach($result as $data)
	{
		echo
		"<tr><td>".$data['username']."</td><td>".$data['password']."</td><td>".$data['nama']."</td><td>".$data['email']."</td></tr>";
		
		//disini akan dibuat tombol Edit dan Hapus          
          
          }
          echo "</table>";
        }
         ?>
		 
		 </div></div></div>