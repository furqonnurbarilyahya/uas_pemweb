<?php 
include 'koneksi.php'; 
$nama_layanan = $_POST['layanan'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nama_dokter = $_POST['nama_dokter'];
$status = $_POST['status'];
		mysqli_query($koneksi, "INSERT INTO layanan VALUES (NULL,'$nama_layanan','$hari','$jam','$nama_dokter','$status')");
		header("location:layanan.php?alert=berhasil");

?>