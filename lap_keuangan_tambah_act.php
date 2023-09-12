<?php 
include 'koneksi.php'; 
$nama_layanan = $_POST['nama_layanan'];
$nama_pasien = $_POST['nama_pasien'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$tindakan = $_POST['tindakan'];
$nominal_bayar = $_POST['nominal_bayar'];
$tanggal_bayar = $_POST['tanggal_bayar'];
		mysqli_query($koneksi, "INSERT INTO pembayaran VALUES (NULL,'$nama_layanan','$nama_pasien','$keluhan','$diagnosa','$tindakan','$nominal_bayar','$tanggal_bayar')");
		header("location:lap_keuangan.php?alert=berhasil");

?>