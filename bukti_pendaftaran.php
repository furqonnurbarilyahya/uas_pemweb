<?php include 'koneksi.php'; 
if( !isset($_GET['id']) ){
    // header('Location: admin-proses.php');
}
//ambil id dari query string
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Bukti Pendaftaran Pasien</title>
  </head>
  <body class="bg-gray-300">
    <!-- Hero -->
    <section id="home">
      <div class="h-screen w-full relative">
        <div class="bg-cyan-800 py-3 w-full flex justify-center space-x-10 text-lg text-white text-opacity-70 fixed top-0 z-20 items-center font-semibold drop-shadow-lg">
          <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg mr-10" alt="" />
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Beranda</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Profil</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Layanan</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Kontak kami</a>
          <a href="pendaftaran.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Pendaftaran Online</a>
          <a href="form_login.php" class="p-2 w-24 text-center text-white rounded-xl bg-green-600  hover:bg-green-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Masuk</a>
        </div>
        <div class="absolute top-16 left-16 w-full">
        <table cellpadding="5" cellspacing="10" class="table-auto border-collapse mt-10 absolute left-1 shadow-2xl">
        <?php
			    $data = mysqli_query($koneksi,"SELECT nama, nik, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, no_telepon, agama, layanan, no_antrian FROM pasien ORDER BY id DESC LIMIT 1");
		      	$d = mysqli_fetch_array($data);
			?>
                <tr class="bg-indigo-50">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-indigo-50">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-indigo-50 pb-8">
                    <td class="flex justify-end items-end">
                        <img src="assets/image/logo_rsi.png" style="width: 60px; height: 60px; border-radius: 80px;" alt="">
                    </td>
                    <td colspan="3" class="text-black bg-indigo-50 text-center font-semibold text-3xl underline underline-offset-4">Bukti Pendaftaran Pasien</td>
                    <td class="text-xl text-black font-bold px-12">No Antrian:</td>
                    <td class="text-xl font-bold"><?php echo "BA0".$d['no_antrian']; ?></td>
                </tr>
                <tr class="bg-indigo-50">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-indigo-50">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-white">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Nama </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['nama']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Nomor Induk Kependudukan </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['nik']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Jenis Kelamin </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['jenis_kelamin']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Tempat Lahir </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['tempat_lahir']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Tanggal Lahir </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['tanggal_lahir']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Alamat </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['alamat']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Nomer Telepon </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['no_telepon']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Agama </td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['agama']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                <td class="bg-white text-xl text-left text-black px-12">Layanan Tujuan</td>
                <td class="bg-white text-left text-xl text-black px-12">:  <?php echo $d['layanan']; ?></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
                <td class="bg-white text-xl text-black px-12"></td>
              </tr>
              <tr class="bg-white">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              <tr class="bg-white">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              <tr class="bg-white">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
          </table>
        </div>
  </div>
      </div>
    </section>
    <!-- Hero -->
  </body>
</html>
