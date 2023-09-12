<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Pendaftaran Pasien</title>
  </head>
  <body class="">
    <!-- Hero -->
    <section id="home">
      <div class="h-screen w-full relative">
        <div class="bg-cyan-800 py-3 w-full flex justify-center space-x-10 text-lg text-white text-opacity-70 absolute top-0 z-20 items-center font-semibold drop-shadow-lg">
          <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg mr-10" alt="" />
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Beranda</a>
          <a href="#profil" class="hover:text-white hover:duration-500 hover:ease-in-out">Profil</a>
          <a href="" class="hover:text-white hover:duration-500 hover:ease-in-out">Layanan</a>
          <a href="" class="hover:text-white hover:duration-500 hover:ease-in-out">Kontak kami</a>
          <a href="" class="hover:text-white hover:duration-500 hover:ease-in-out">Pendaftaran Online</a>
          <a href="form_login.php" class="p-2 w-24 text-center text-white rounded-xl bg-green-600  hover:bg-green-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Masuk</a>
         </div>
         <div class="absolute w-full grid grid-cols-3">
         <img src="assets/image/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg" class="object-cover h-screen w-full absolute" alt="">
         <div class="bg-black w-full h-screen absolute opacity-70"></div>
             <div class="top-44 z-10 col-start-2 mt-48 rounded-xl bg-green-600 shadow-lg">
                    <h1 class="text-white text-4xl text-center p-10 font-semibold">Pendaftaran Berhasil</h1>
             </div>
            </div>
            <?php 
			          $data = mysqli_query($koneksi,"SELECT no_antrian FROM pasien ORDER BY id DESC LIMIT 1");
		      	    $d = mysqli_fetch_array($data);
                $default = $d['no_antrian'];
			    	?>
            <?php 

              if ($default == NULL) {
                echo "<h1 class='bg-yellow-400 absolute bottom-10 right-10 z-10 p-2 rounded-lg text-black font-medium'>Mohon Menunggu Dokumen Anda Sedang Proses Validasi</h1>";
              } else if ($default == "Tidak Valid"){
                echo "<h1 class='bg-red-600 absolute bottom-10 right-10 z-10 p-2 rounded-lg text-white font-medium'>Data yang diinputkan tidak sama dengan KTP, Silahkan Daftar Lagi <span><a href='pendaftaran.php' class='underline underline-offset-2'>Klik Disini</a></span></h1>";
              } else {
                echo "<a href='nomer_antrian.php' class='bg-slate-300 hover:bg-slate-200 absolute bottom-10 right-10 z-10 p-2 rounded-lg text-black font-medium'>Lihat Nomer Antrian</a>";
              }
            ?>
        </div>
    </section>
    <!-- Hero -->
  </body>
</html>
