<?php
include('koneksi.php');
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    // header('Location: admin-proses.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM pasien WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$pasien = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Tambah Nomer Antrian</title>
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
      <img src="foto/<?php echo $pasien['foto'] ?>" class="z-20 right-10 fixed top-52" width="500" height="500" alt="">
      <div class="absolute container w-2/3 z-10 top-32 p-4">
        <h1 class="text-4xl absolute mb-7 font-semibold left-56 underline underline-offset-4">Proses Validasi Data Pasien</h1>
             <form action="admin_proses_act.php" method="post" enctype="multipart/form-data" class="bg-cyan-700 shadow-md ml-60 w-1/2 mt-20 rounded-lg px-8 pt-6 pb-8 mb-4">
             <input type="hidden" name="id" value="<?php echo $pasien['id'] ?>">
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nama (Sesuai KTP)</label>
            <input disabled class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="nama" value="<?php echo $pasien['nama'] ?>" placeholder="Masukkan Nama">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nik">NIK (Nomer Induk Kependudukan)</label>
            <input disabled class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="nik" type="text" name="nik" value="<?php echo $pasien['nik'] ?>" placeholder="Masukkan NIK">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="jenis_kelamin">Jenis Kelamin</label>
            <?php $jk = $pasien['jenis_kelamin'] ?>
            <div  class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
              <input disabled type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?> id=""> Laki-laki
              <br>
              <input disabled type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?> id=""> Perempuan
            </div>
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="tempat_lahir">Tempat Lahir</label>
            <input disabled class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="tempat_lahir" type="text" name="tempat_lahir" value="<?php echo $pasien['tempat_lahir'] ?>" placeholder="Masukkan Tempat Lahir">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Tanggal Lahir</label>
            <input class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="tanggal_lahir" value="<?php echo $pasien['tanggal_lahir'] ?>" id="tanggal_lahir" type="date">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Alamat</label>
            <input disabled class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="alamat"  name="alamat" value="<?php echo $pasien['alamat'] ?>" type="text" placeholder="Masukkan Alamat">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nomor Telepon / Nomor WA</label>
            <input disabled class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="no_telepon" name="no_telepon" value="<?php echo $pasien['no_telepon'] ?>" type="text" placeholder="Masukkan Nomor Telepon">
         </div>
          <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" for="nama">Agama</label>
          <?php $agama = $pasien['agama'] ?>
          <div class="font-semibold text-black bg-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
              <input disabled type="radio" name="agama" value="Buddha" <?php echo ($agama == 'Buddha') ? "checked": "" ?> id=""> Buddha
              <br>
              <input disabled type="radio" name="agama" value="Hindu" <?php echo ($agama == 'Hindu') ? "checked": "" ?> id=""> Hindu
              <br>
              <input disabled type="radio" name="agama" value="Islam" <?php echo ($agama == 'Islam') ? "checked": "" ?> id=""> Islam
              <br>
              <input disabled type="radio" name="agama" value="Katolik" <?php echo ($agama == 'Katolik') ? "checked": "" ?> id=""> Katolik
              <br>
              <input disabled type="radio" name="agama" value="Kristen" <?php echo ($agama == 'Kristen') ? "checked": "" ?> id=""> Kristen
              <br>
              <input disabled type="radio" name="agama" value="Konghucu" <?php echo ($agama == 'Konghucu') ? "checked": "" ?> id=""> Konghucu
            </div>
         </div>
         <div class="w-auto">
            <label for="layanan" class="block  text-white text-sm font-bold mb-2">Layanan</label>
            <?php $layanan = $pasien['layanan']; ?>
            <select disabled id="layanan" name="layanan" class="font-semibold text-black bg-white block w-full px-4 py-2 mt-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:border-blue-300">
                <option value="" disabled selected>Pilih layanan...</option>
                <option name="layanan" value="Pemeriksaan Umum" <?php echo ($layanan == 'Pemeriksaan Umum') ? "selected": "" ?>>Pemeriksaan Umum</option>
                <option name="layanan" value="Bedah Laparoskopik" <?php echo ($layanan == 'Bedah Laparoskopik') ? "selected": "" ?>>Bedah Laparoskopik</option>
                <option name="layanan" value="KPBA" <?php echo ($layanan == 'KPBA') ? "selected": "" ?>>KPBA</option>
                <option name="layanan" value="Radiologi" <?php echo ($layanan == 'Radiologi') ? "selected": "" ?>>Radiologi</option>
                <option name="layanan" value="Unit Gawat Darurat" <?php echo ($layanan == 'Unit Gawat Darurat') ? "selected": "" ?>>Unit Gawat Darurat</option>
                <option name="layanan" value="Diabetes Terpadu" <?php echo ($layanan == 'Diabetes Terpadu') ? "selected": "" ?>>Diabetes Terpadu</option>
                <option name="layanan" value="Hemodialisa" <?php echo ($layanan == 'Hemodialisa') ? "selected": "" ?>>Hemodialisa</option>
                <option name="layanan" value="Laboratorium" <?php echo ($layanan == 'Laboratorium') ? "selected": "" ?>>Laboratorium</option>
                <option name="layanan" value="Kebidanan & Kandungan" <?php echo ($layanan == 'Kebidanan & Kandungan') ? "selected": "" ?>>Kebidanan & Kandungan</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">No Antrian</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="no_telepon" name="no_antrian" type="text" value="<?php echo $pasien['no_antrian'] ?>" placeholder="Masukkan Nomor Antrian">
         </div>

      <div class="flex items-center justify-between">
        <a class="inline-block align-baseline font-bold text-base text-white hover:text-blue-800" href="daftar_pasien.php">
          Batal
        </a>
        <input class="bg-green-500 p-2 px-3 text-lg text-white rounded-md hover:bg-green-400 hover:text-black" type="submit" value="Proses" name="proses">
      </div>
    </form>
    <!-- form end-->
  </div>
    </section>
    <!-- Hero -->

    
  </body>
</html>
