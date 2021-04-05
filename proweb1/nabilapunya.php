<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PORTAL USU</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/tugas4-style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>      
  </head>
<body background="pin3.jpg">
<?php
		session_start();
		if($_SESSION['status']!="login"){
			header("location:../index.php?pesan=belum_login");
		}
	?>
  
    <header style="background: url(pin.jpg);"><center>
       <nav class="navbar">
      <div class="navbar-header">
        </div>   
        <!-- Membuat Search Bar -->
<div class="nav navbar-nav form-inline navbar-right" style="padding: 10px;">

          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-default">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div></div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php">Halaman Utama</a></li>
          <li><a href="profil.html">Profil</a></li>
          <li><a href="hubungi.html">Author</a></li>
          <li><a href="sosmed.html">Sosial Media</a></li>
      <li><a href="logout.php"> Log Out</a></button>
	  

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Menu Login</h4>
      </div>
      <div class="modal-body">
      
        <form>
          <table >
            <center>
  <tr>
  <td >Username </td>
  <td><input type="text"name="username"><br></td>
</tr>
<tr>
  <td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
  <td>Password </td>
  <td><input type="password"name="password"><br></td>
</tr>
<tr>
  <td></td>
  <td><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Login</button></td>

</tr>
</table>
</form>

      </div>
      
        <center><p>Belum Punya Akun? Daftar <a href="daftar1.php">disini!</a></p>
      
    </div>

  </div>
</div>
</div>
        </ul>
      </nav>


      <div class="text-center">
	  <img src="../image/logo_usu.png" width="120" height="100"  />
          <h1>PORTAL USU</h1>
          <div class="lead">SISTEM AKADEMIK</div>
          <br>
          <br>
          <br>
          <br>
      </div>
    </header>
          		</div>
				
    <footer>
      <div class="container-fluid">
        <hr>
        <ul class="nav navbar-nav navtengah">
          <li><a href="index.html">Halaman Utama</a></li>
          <li><a href="profil.html">Profil</a></li>
          <li><a href="sosmed.html">Sosial Media</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>