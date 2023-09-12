<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Daftar Antrian Pasien</title>
  </head>
  <body class="bg-slate-300">
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
          <a href="" class="p-2 w-24 text-center text-white rounded-xl bg-green-600  hover:bg-green-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Masuk</a>
        </div>
        <!-- daftar antrian start -->
        <div class="absolute top-40 left-36">
        <table cellpadding="5" cellspacing="10" class="table-auto border-collapse border-2 absolute left-72 border-black">
            <thead>
              <tr class="bg-cyan-600">
                <th class="border border-black text-xl text-white px-12">No.Antrian</th>
                <th class="border border-black text-xl text-white px-12">Keterangan</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <?php 
                $totalRow = mysqli_query($koneksi, "SELECT COUNT(*) AS TOTAL FROM pasien");
			          $data = mysqli_query($koneksi,"SELECT * FROM pasien");
                $i = 1;
                $row = mysqli_fetch_array($totalRow);
		      	    while($d = mysqli_fetch_array($data)){
			    	?>
              <tr>
                <td class="border border-black font-semibold bg-cyan-50 text-center text-lg">
                  <?php 
                  if ($d['no_antrian'] == NULL) {
                    echo "";
                  } else if ($d['no_antrian'] == "Tidak Valid") {
                    echo '<td class="border border-black font-semibold bg-cyan-50 text-lg text-center"></td>"';
                    continue;
                  } else {
                    echo "BA0" . $d['no_antrian'];
                  }
                  ?>
                </td>
                <td class="border border-black font-semibold bg-cyan-50 text-lg text-center">
                  <?php
                  if ($i <= 3) {
                    echo "Proses di Loket";
                  } else {
                    echo "Persiapan Menuju Loket";
                  }
                  ?>
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
        <?php 
			    $data = mysqli_query($koneksi,"SELECT no_antrian FROM pasien ORDER BY id DESC LIMIT 1");
		      $d = mysqli_fetch_array($data);
          $default = $d['no_antrian'];
          if ($default != null) {
            echo '<h1 class="bg-yellow-400 absolute bottom-10 font-semibold left-5 z-10 p-2 rounded-lg text-black">Perhatian: Jika pemilik nomer antrian lebih dari 5 menit tidak ada di loket, maka nomer antrian akan dianggap hangus </h1>"';
            echo "<a href='bukti_pendaftaran.php?id=".$d['id']."' class='bg-green-600 hover:bg-green-500 absolute bottom-10 right-10 z-10 p-2 rounded-lg text-white font-medium'>Lihat Bukti Pendaftaran</a>";
          }
		    ?>
        </div>
      </div>
    </section>
    <!-- Hero -->
  </body>
</html>
