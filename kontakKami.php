<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Pesan Masuk</title>
  </head>
  <body class="">
    <!-- Hero -->
    <section id="home">
      <div class="h-full relative">
        <div class="bg-cyan-800 py-5 w-full z-10 drop-shadow-lg fixed">
        <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg ml-16" alt="" />
        <h1 class="p-2 text-center text-white font-semibold top-7 right-36 absolute">Selamat Datang di Dashboard, Admin B651</h1>
        <img src="assets/image/logo profil.png" class="absolute top-5 w-14 h-14 right-24" alt="">
        <!-- <a href="" class="p-2 w-24 text-center top-5 right-5 absolute text-white rounded-xl bg-red-600 hover:bg-red-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Keluar</a> -->
        </div>
      </div>
      <div class="">
        <div class="bg-cyan-950 fixed grid grid-rows-6 h-full justify-center px-5 text-md text-white z-0 text-opacity-70 top-20 items-center font-semibold py-10 pb-20">
          <a href="admin.php" class="bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Daftar Antrian</a>
          <a href="daftar_pasien.php" class=" bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Calon Pasien</a>
          <a href="#" class=" bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Layanan</a>
          <a href="lap_keuangan.php" class=" bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Laporan Keuangan</a>
          <a href="" class=" bg-cyan-900 hover:duration-700 hover:ease-in-out border border-white text-center hover:bg-slate-200 hover:text-black p-1 px-2 rounded-md">Pesan</a>
          <a href="index.php" class="border bg-red-700 hover:bg-red-500 text-center p-1 rounded-md hover:text-black hover:duration-700 hover:ease-in-out">Keluar</a>
        </div>
        </div>
        <div class="top-32 left-44 absolute mx-10">
          <h1 class="text-4xl font-semibold underline underline-offset-8 mb-20">Pesan Masuk</h1>
          <table cellpadding="10" class="table-auto border-collapse absolute ml-64 border border-black">
            <thead>
              <tr class="bg-cyan-200">
                <th class="border border-black">No</th>
                <th class="border border-black">Nama</th>
                <th class="border border-black">Email</th>
                <th class="border border-black">Pesan</th>
                <th class="border border-black">Tindakan</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <?php 
			          $data = mysqli_query($koneksi,"select * from kontak_kami");
                $i = 1;
		      	    while($d = mysqli_fetch_array($data)){
			    	?>
              <tr class="bg-cyan-50">
                <td class="border border-black text-center"><?php echo $i."."; ?></td>
                <td class="border border-black"><?php echo $d['nama']; ?></td>
                <td class="border border-black"><?php echo $d['email']; ?></td>
                <td class="border border-black"><?php echo $d['pesan']; ?></td>
                <td class="border border-black">
                  <a href="layanan_hapus.php?id=<?php echo $d['id']?>" class="bg-red-600  hover:text-black hover:bg-red-500 py-1 ml-1 px-2 text-white rounded-md">Hapus</a>
                </td>
              </tr>
				<?php
        $i++;
			}
 
			?>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Hero -->

    
  </body>
</html>
