<?php

include("koneksi.php");
    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pasien WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: admin.php');
    } else {
        die("gagal menghapus...");
    }

?>