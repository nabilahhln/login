<?php
session_start();

include 'koneksi.php';

$nim = $_POST['nim'];
$password = $_POST['password'];
$nama = $_POST['nama'];

$data = mysqli_query($koneksi,"select * from mahasiswa where nim='$nim' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nim'] = $nim;
	$_SESSION['status'] = "login";
	header("location:proweb1/nabilapunya.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>