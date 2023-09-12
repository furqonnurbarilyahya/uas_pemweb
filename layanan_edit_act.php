<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['proses'])){
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $nama_dokter = $_POST['nama_dokter'];
    $status = $_POST['status'];

    // buat query update
    $sql = "UPDATE layanan SET hari='$hari', jam='$jam', nama_dokter='$nama_dokter', status= '$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: layanan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>