<?php 
include 'koneksi.php'; 
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$nama_dokter = $_POST['nama_dokter'];
$status = $_POST['status'];
		mysqli_query($koneksi, "INSERT INTO kontak_kami VALUES (NULL,'$nama','$email','$pesan')");
		header("location:index.php?alert=berhasil");

?>