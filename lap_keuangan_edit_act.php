<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['proses'])){
$id = $_POST['id'];
$nama_layanan = $_POST['nama_layanan'];
$nama_pasien = $_POST['nama_pasien'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$tindakan = $_POST['tindakan'];
$nominal_bayar = $_POST['nominal_bayar'];
$tanggal_bayar = $_POST['tanggal_bayar'];

    // buat query update
    $sql = "UPDATE layanan SET hari='$hari', jam='$jam', nama_dokter='$nama_dokter', status= '$status' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: lap_keuangan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>