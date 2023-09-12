<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Beranda</title>
  </head>
  <body>
    <!-- Hero -->
    <section id="home">
      <div class="h-screen w-full relative">
        <div class="bg-cyan-800 py-3 w-full flex justify-center space-x-10 text-lg text-white text-opacity-70 fixed top-0 z-40 items-center font-semibold drop-shadow-lg">
          <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg mr-10" alt="" />
          <a href="#home" class="hover:text-white hover:duration-500 hover:ease-in-out">Beranda</a>
          <a href="#profil" class="hover:text-white hover:duration-500 hover:ease-in-out">Profil</a>
          <a href="#layanan" class="hover:text-white hover:duration-500 hover:ease-in-out">Layanan</a>
          <a href="#kontakKami" class="hover:text-white hover:duration-500 hover:ease-in-out">Kontak kami</a>
          <a href="pendaftaran.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Pendaftaran Online</a>
          <a href="form_login.php" class="p-2 w-24 text-center text-white rounded-xl bg-green-600  hover:bg-green-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Masuk</a>
        </div>
        <img src="assets/image/benyamin-bohlouli-e7MJLM5VGjY-unsplash (1).jpg" class="h-screen w-full object-cover blur-sm absolute top-0 z-0" alt="" />
        <div class="w-full h-screen z-10 absolute top-0 bg-black opacity-70"></div>

        
          <div class="absolute z-20 bg-gray-300 border-2 border-black right-20 w-1/3 top-52"style="border-radius: 90px;">
            <img src="assets/image/usman-yousaf-kp_2iASJPvI-unsplash-removebg-preview.png" class="" alt="" />
          </div>

        <div class="absolute grid grid-cols-8 z-20 top-56">
          <div class="col-start-2 col-span-4 flex flex-col space-y-10">
            <h1 class="text-white text-5xl font-medium font-serif">Selamat Datang di Website</h1>
            <h1 class="text-white text-2xl font-serif">Rumah Sakit Islam Garam Kalianget</h1>
            <a href="pendaftaran.php" class="bg-yellow-600 text-white font-semibold w-40 rounded-lg text-xl p-2 hover:bg-yellow-500 hover:scale-110 hover:duration-700 hover:ease-in-out hover:text-black hover:font-semibold text-center">Daftar Online</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero -->

    <!-- profil -->
    <section id="profil">
      <div class="mt-30 w-full h-screen">
        <div>
          <h1 class="text-center text-3xl my-16 text-cyan-800 font-serif font-semibold">Sejarah Rumah Sakit Islam Garam Kalianget</h1>
        </div>
        <div class="absolute z-20 grid grid-cols-10">
          <div class="col-start-2 col-span-4">
            <img src="assets/image/graham-ruttan-ScXGSS5a9BI-unsplash.jpg" class="rounded-xl" alt="" />
          </div>
        </div>
        <div class="absolute z-20 grid grid-cols-10">
          <div class="col-start-7 col-span-3">
            <h1 class="text-justify text-lg font-serif">
              Tahun 1942 di Perusahaan Garam yang nama aslinya Z.W. (Zoutler Water) , kemudian berubah menjadi PGSN, PPG, PPGA, telah berdiri unit kesehatan yang berbentuk klinik, dengan ruang perawatan kapasitas 21 TT (18 TT untuk pasien
              Laki-2 & 3 TT untuk wanita). Tanggal 17 Oktober 1955 diresmikan penggunaannya sebagai Pusat Pelayanan Kesehatan dengan nama RS MARDI WALUYO kapasitas 50 TT dan 11 TT untuk Bayi.
            </h1>
            <br />
            <h1 class="text-justify text-lg font-serif">
              Perjalanan RS MARDI WALUYO mengalami pasang surut, dan pada dekade Sembilan puluhan mengalami kemunduran yang pada akhirnya tepat pada tahun 2000 dikerjasamankan dengan Pimpinan Wilayah Muhammadiyah serta berganti nama dengan
              Rumah Sakit Islam Garam Kalianget.
            </h1>
          </div>
        </div>
      </div>
      <div class="mt-32 w-full h-screen relative">
        <img src="assets/image/graham-ruttan-ScXGSS5a9BI-unsplash.jpg" class="object-cover h-screen w-full absolute blur-sm" alt="">
        <div class="bg-black w-full h-screen absolute opacity-60"></div>
        <div class="absolute mt-24 z-30 grid grid-cols-10">
          <div class="border rounded-lg mb-72 bg-cyan-800 p-6 col-start-2 col-span-4">
            <h1 class="font-bold text-3xl mb-5 text-white">Visi</h1>
            <h1 class="text-justify font-serif text-xl text-white">Terwujudnya Rumah Sakit yang Islami terpercaya yang menjadi rujukan bagi masyarakat Sumenep dan sekitarnya.</h1>
          </div>
          <div class="border rounded-lg bg-cyan-800 p-5 pl-10 mt-56 col-start-6 col-span-4">
            <h1 class="font-bold text-white text-3xl mb-5">Misi</h1>
            <ul class="list-disc font-serif text-xl text-white">
                <li class="my-2">
                    Memberikan pelayanan kesehatan yang islami, paripurna, bermutu, dan terjangkau sebagai sarana dakwah
                </li>
                <li class="my-2">
                    Mewujudkan sumber daya insani yang loyal & professional.
                </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- profil -->

    <!--Layanan start  -->
    <section id="layanan">
      <div class="w-full h-screen relative">
        <h1 class="pt-10 text-center text-cyan-800 text-3xl font-serif font-semibold">Daftar Layanan</h1>
        <div class="flex justify-center mt-10 absolute flex-wrap gap-10">
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/marcel-scholte-LPurJnihmQI-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Bedah Laparoskopik</h1>
            <h1 class="pb-5 text-center text-white">Pengangkatan kantong empedu, usus buntu, pengangkatan indung telur.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/r-o-FFA8yd4OynY-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">KPBA</h1>
            <h1 class="pb-5 text-center text-white">Penanganan masalah perkembangan anak agar tumbuh secara optimal</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/national-cancer-institute-XrLSV-CKmuQ-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Radiologi</h1>
            <h1 class="pb-5 text-center text-white">Sinar-X, CT scan, dan MRI untuk diagnosis penyakit dan pemantauan kondisi pasien.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/natanael-melchor-43LwvC-eQPM-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Unit Gawat Darurat</h1>
            <h1 class="pb-5 text-center text-white">Penanganan medis segera untuk pasien yang kritis atau mengancam jiwa.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/matt-c-bRjpGjwmae8-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Diabetes Terpadu</h1>
            <h1 class="pb-5 text-center text-white">Perawatan khusus untuk diabetes, dengan kapasitas 20 tempat tidur.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/niko-azhari-hidayat-a-FfDhFOcdU-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Hemodialisa</h1>
            <h1 class="pb-5 text-center text-white">Melayani cuci darah untuk pasien dengan gangguan fungsi ginjal.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/lucas-vasques-9vnACvX2748-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Laboratorium</h1>
            <h1 class="pb-5 text-center text-white">Dilengkapi dengan alat auto analyzer modern dengan metode pemeriksaan terbaru.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div>
          <div class="hover:scale-110 duration-700 ease-in-out">
            <div class="flex-none w-56 ml-4 bg-cyan-600 rounded-xl pt-5 px-2"><img style="border-radius: 80px; width: 200px; height: 160px; margin-bottom: 2.5rem;" src="assets/image/khoa-pham-9nC7j1gAS84-unsplash.jpg" alt="">
            <h1 class="mb-5 text-center text-black w-auto rounded-full font-semibold font-mono text-lg bg-white ">Kandungan</h1>
            <h1 class="pb-5 text-center text-white">Menangani perawatan kehamilan, persalinan terkait masalah kandungan.</h1>
            <div class="pb-5 text-center">
              <a href="#jadwalLayanan" class="underline underline-offset-4 font-serif text-white p-1 font-semibold rounded-xl">Lihat Jadwal >></a>
            </div>
          </div>
        </div> 
        </div>
      </div>
    </section>
    <!--Layanan end  -->

    <!-- Jadwal layanan Start -->
    <section id="jadwalLayanan">
      <div class="w-full h-screen mt-96 relative">
        <img src="assets/image/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg" class="h-screen w-full object-cover absolute z-0" alt="">
        <div class="w-full h-screen bg-black z-0 absolute opacity-70">
          <h1 class="absolute mx-96 left-32 mt-3 font-serif text-white z-30 text-4xl pt-5">Jadwal Layanan</h1>
        </div>
        <!-- daftar layanan start -->
        <div class="rounded absolute z-10 left-3 mx-80 mt-14 ">
          <table cellpadding="10" class="table-fixed border-collapse mt-10 border-2 border-black">
          <thead>
              <tr class="bg-cyan-200">
                <th class="border border-black">No</th>
                <th class="border border-black">Nama Layanan</th>
                <th class="border border-black">Dokter</th>
                <th class="border border-black">Hari</th>
                <th class="border border-black">Jam</th>
                <th class="border border-black">Status</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <?php 
			          $data = mysqli_query($koneksi,"select * from layanan");
                $i = 1;
		      	    while($d = mysqli_fetch_array($data)){
			    	?>
              <tr class="bg-cyan-50 font-medium">
                <td class="border border-black text-sm text-center"><?php echo $i . "."; ?></td>
                <td class="border border-black text-sm"><?php echo $d['nama_layanan']; ?></td>
                <td class="border border-black text-sm"><?php echo $d['nama_dokter']; ?></td>
                <td class="border border-black text-sm"><?php echo $d['hari']; ?></td>
                <td class="border border-black text-sm"><?php echo $d['jam']; ?></td>
                <td class="border border-black text-sm">
                  <?php if ($d['status'] == "Buka"){
                      echo '<h1 class="bg-green-500 text-center hover:text-black py-1 ml-1 px-4 text-white rounded-md">Buka</h1>';
                  } else {
                    echo '<h1 class="bg-red-500 hover:text-black py-1 ml-1 px-4 text-white rounded-md">Tutup</h1>';
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
        </div>
      </section>
      <!-- daftar layanan end -->
      <section id="kontakKami">
            <div class="w-full h-screen">
                <div class="bg-gray-200 pt-10 h-full">
                    <div class="container mx-auto px-4">
                    <div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-md">
                        <h2 class="text-2xl font-bold mb-6">Kontak Kami</h2>
                        <form action="kontakKami_act.php" method="post">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                            <input type="text" id="name" name="nama" placeholder="Masukkan nama Anda"
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda"
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" name="pesan" rows="4" placeholder="Tulis pesan Anda"
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Kirim</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="bg-gray-800 text-gray-200 py-6">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row md:justify-between">
        <div class="mb-4 md:mb-0">
          <h3 class="text-xl font-bold">Rumah Sakit Islam Garam Kalianget</h3>
          <p class="mt-2 font-light">Kecamatan Kalianget, Kabupaten Sumenep, Provinsi Jawa Timur</p>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-2">Hubungi Kami</h4>
          <p>Alamat: Jalan Masjid I No.1, Kebunagung</p>
          <p>Email: rsigaramkalianget@gmail.com</p>
          <p>Telepon: 192-981-987</p>
        </div>
      </div>
      <hr class="my-4 border-gray-700">
      <p class="text-center">© 2023 UAS APS & PEMWEB Furqon. All rights reserved.</p>
    </div>
  </footer>
  </body>
</html>
