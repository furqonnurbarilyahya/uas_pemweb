<?php

include("koneksi.php");
    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM layanan WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: layanan.php');
    } else {
        die("gagal menghapus...");
    }

?>