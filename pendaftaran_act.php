<?php 
include 'koneksi.php'; 
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$agama = $_POST['agama'];
$layanan = $_POST['layanan'];
$no_antrian = $_POST['no_antrian'];
$rand = rand();
// print_r($_FILES);
// exit();
$ekstensi =  array('jpg','png','jpeg','gif');
// $ekstensiBerkas =  array('PNG','JPG','JPEG','GIF');
$filename = $_FILES['foto']['name'];// foto 1
// $filename2 = $_FILES['foto2']['name'];//foto 2
// $filename3 = $_FILES['foto']['name'];
// move_uploaded_file($_FILES['tmp_name'], 'gambar/'.$rand.'_'.$filename);
$ukuran = $_FILES['foto']['size'];
// $ukuran2 = $_FILES['foto2']['size'];
// $ukuran2 = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
// $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
// $ext3 = pathinfo($filename, PATHINFO_EXTENSION);
//  $x =
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 104407099){		
		$xx = $rand.'_'.$filename;
		// $xx2 = $rand.'_'.$filename2;
		// $xx3 = $rand.'_'.$filename3;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);
		// move_uploaded_file($_FILES['foto2']['tmp_name'], 'gambar/'.$rand.'_'.$filename2);
		// move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename3);
		// move_uploaded_file($_FILES['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO pasien VALUES (NULL,'$nama','$nik','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$no_telepon','$agama','$layanan','$xx',DEFAULT)");
		header("location:statusPendaftaran.php?alert=berhasil");
	}
	// }else{
	// 	header("location:index.php?alert=gagak_ukuran");
	// }
}