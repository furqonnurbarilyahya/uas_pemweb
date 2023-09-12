<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	header("location:admin.php?login=berhasil");
}else{
	header("location:form_login.php?login=gagal");
	echo "Username atau Password salah";
}
 
?>