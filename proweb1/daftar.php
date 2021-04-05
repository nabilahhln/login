<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/tugas4-style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>      
  </head>
<body background="background2.jpg">
  
    <header style="background: url(desk5.jpg);">
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
          <li><a href="#">Home</a></li>
          <li><a href="profil.php">About</a></li>
          <li><a href="hubungi.html">Author</a></li>
          <li><a href="sosialmedia.html">Social Media</a></li>
      <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
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
      
        <center><p>Belum Punya Akun? Daftar <a href="register.php>">disini!</a></p>
      
    </div>

  </div>
</div>
</div>
        </ul>
      </nav>

      <div class="text-center">
          <h1 >Tekno Blog</h1>
          <div class="lead">Informasi Terkini Teknologi Informasi</div>
          <br>
          <br>
          <br>
          <br>
      </div>
    </header>

      <p><center><h1>Registrasi Akun</h1></center></p>
      <form action="register.php" method="POST" onsubmit="return validasi(this)">
            <table border="1">
                <tbody>
                <h2>Buat Akun</h2>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="pengguna" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="sandi" value="" />
                        </td>
                    </tr>
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                  </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="email" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Buat Akun" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
</body>
</html>