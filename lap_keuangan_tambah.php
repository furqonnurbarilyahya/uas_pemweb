<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Tambah Layanan</title>
  </head>
  <body class="">
    <!-- Hero -->
    <section id="home">
      <div class="h-full relative">
        <div class="bg-cyan-800 py-5 w-full z-30 fixed drop-shadow-lg">
        <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg ml-16" alt="" />
        <h1 class="p-2 text-center text-white font-semibold top-7 right-36 absolute">Selamat Datang di Dashboard, Admin B651</h1>
        <img src="assets/image/logo profil.png" class="absolute top-5 w-14 h-14 right-24" alt="">
        <!-- <a href="" class="p-2 w-24 text-center top-5 right-5 absolute text-white rounded-xl bg-red-600 hover:bg-red-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Keluar</a> -->
        </div>
      </div>
      <div class="">
        <div class="bg-cyan-950 grid grid-rows-6 h-full justify-center px-5 text-md text-white z-20 text-opacity-70 top-20 fixed pb-20 items-center font-semibold py-10">
          <a href="admin.php" class="bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Daftar Antrian</a>
          <a href="daftar_pasien.php" class="bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Calon Pasien</a>
          <a href="#" class="bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Poli</a>
          <a href="" class="bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Kontak kami</a>
          <a href="" class="bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Laporan Keuangan</a>
          <a href="index.php" class="border bg-red-700 hover:bg-red-500 text-center p-1 rounded-md hover:text-black hover:duration-700 hover:ease-in-out">Keluar</a>
        </div>
        </div>
      </div>
      <div class="absolute container w-full z-10 top-32 p-4">
        <h1 class="text-4xl absolute mb-7 font-semibold left-56 underline underline-offset-2">Tambah Data Pembayaran</h1>
             <form action="lap_keuangan_tambah_act.php" method="post" enctype="multipart/form-data" class="bg-cyan-700 shadow-md ml-96 mx-52 mt-20 rounded-lg px-8 pt-6 pb-8 mb-4 a">
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nama Layanan</label>
                <select id="layanan" name="nama_layanan" class="block w-full px-4 py-2 mt-2 mb-4 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-blue-300">
                    <option value="" disabled selected>Pilih Layanan</option>
                    <option name="layanan" value="Pemeriksaan Umum">Pemeriksaan Umum</option>
                    <option name="layanan" value="Bedah Laparoskopik">Bedah Laparoskopik</option>
                    <option name="layanan" value="KPBA">KPBA</option>
                    <option name="layanan" value="Radiologi">Radiologi</option>
                    <option name="layanan" value="Unit Gawat Darurat">Unit Gawat Darurat</option>
                    <option name="layanan" value="Diabetes Terpadu">Diabetes Terpadu</option>
                    <option name="layanan" value="Hemodialisa">Hemodialisa</option>
                    <option name="layanan" value="Laboratorium">Laboratorium</option>
                    <option name="layanan" value="Kebidanan & Kandungan">Kebidanan & Kandungan</option>
                </select>
        </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nama Pasien</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="nama_pasien" placeholder="Masukkan Nama Pasien">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Keluhan</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="keluhan" placeholder="Masukkan Keluhan">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Diagnosa</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="diagnosa" placeholder="Masukkan Hasil Diagnosa">
         </div>
         <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Tindakan</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="tindakan" placeholder="Masukkan Tindakan">
         </div>
         <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nominal Pembayaran</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="nominal_bayar" placeholder="Masukkan Tindakan">
         </div>
         <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Tanggal Pembayaran</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="datetime-local" name="tanggal_bayar" placeholder="Masukkan Tindakan">
         </div>
          

      <div class="flex items-center justify-between">
        <a class="inline-block align-baseline font-bold text-base text-white hover:text-blue-800" href="lap_keuangan.php">
          Batal
        </a>
        <input class="bg-green-500 p-2 px-3 text-lg text-white rounded-md hover:bg-green-400 hover:text-black" type="submit" value="Simpan" name="proses">
      </div>
    </form>
    <!-- form end-->
  </div>
    </section>
    <!-- Hero -->

    
  </body>
</html>
