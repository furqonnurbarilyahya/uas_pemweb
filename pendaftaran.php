<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <title>Pendaftaran Pasien Online</title>
  </head>
  <body class="bg-slate-300">
    <!-- Hero -->
    <section id="home">
      <div class="w-full h-screen relative">
        <div class="bg-cyan-800 py-3 w-full flex justify-center space-x-10 text-lg text-white text-opacity-70 fixed top-0 z-20 items-center font-semibold drop-shadow-lg">
          <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg mr-10" alt="" />
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Beranda</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Profil</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Layanan</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Kontak kami</a>
          <a href="#" class="hover:text-white hover:duration-500 hover:ease-in-out">Pendaftaran Online</a>
          <a href="form_login.php" class="p-2 w-24 text-center text-white rounded-xl bg-green-600  hover:bg-green-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Masuk</a>
        </div>
        <!-- form -->
        <div class="absolute container w-full z-10 top-32 p-4">
             <form action="pendaftaran_act.php" method="post" enctype="multipart/form-data" class="bg-cyan-800 shadow-md mx-72 rounded-lg px-8 pt-6 pb-8 mb-4 a">
               <!-- <input hidden class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="id" placeholder="Masukkan Nama"> -->
               <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nama (Sesuai KTP)</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="nama" placeholder="Masukkan Nama">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nik">NIK (Nomer Induk Kependudukan)</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nik" type="text" name="nik" placeholder="Masukkan NIK">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="jenis_kelamin">Jenis Kelamin</label>
            <div class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <input type="radio" name="jenis_kelamin" value="Laki-laki" id=""> Laki-laki
              <br>
              <input type="radio" name="jenis_kelamin" value="Perempuan" id=""> Perempuan
            </div>
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="tempat_lahir">Tempat Lahir</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tempat_lahir" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Tanggal Lahir</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal_lahir" id="tanggal_lahir" type="date">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Alamat</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat"  name="alamat" type="text" placeholder="Masukkan Alamat">
         </div>
          <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="nama">Nomor Telepon / Nomor WA</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="no_telepon" name="no_telepon" type="text" placeholder="Masukkan Nomor Telepon">
         </div>
          <div class="mb-4">
          <label class="block text-white text-sm font-bold mb-2" for="nama">Agama</label>
          <div class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <input type="radio" name="agama" value="Buddha" id=""> Buddha
              <br>
              <input type="radio" name="agama" value="Hindu" id=""> Hindu
              <br>
              <input type="radio" name="agama" value="Islam" id=""> Islam
              <br>
              <input type="radio" name="agama" value="Katolik" id=""> Katolik
              <br>
              <input type="radio" name="agama" value="Kristen" id=""> Kristen
              <br>
              <input type="radio" name="agama" value="Konghucu" id=""> Konghucu
            </div>
         </div>
         <div class="w-auto">
            <label for="layanan" class="block  text-white text-sm font-bold mb-2">Layanan</label>
            <select id="layanan" name="layanan" class="block w-full px-4 py-2 mt-2 mb-4 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-blue-300">
                <option value="" disabled selected>Pilih layanan...</option>
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
            <label class="block text-white text-sm font-bold mb-2" for="ktp">KTP (Kartu Tanda Penduduk)</label>
				    <input type="file" name="foto" required="required">
			    	<h1 class="text-white py-2">Upload KTP ( ekstensi .png | .jpg | .jpeg |  )</h1>
         </div>
          <div class="mb-4">
				    <input type="text" name="no_antrian" hidden>
         </div>

      <div class="flex items-center justify-between">
        <button class="bg-green-500 hover:bg-green-600 hover:duration-500 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline" type="submit">Daftar</button>
        <a class="inline-block align-baseline font-bold text-base text-white hover:text-blue-800" href="index.php">
          Batal
        </a>
      </div>
    </form>
    <!-- form end-->
  </div>
      <!-- <footer class="bg-gray-800 w-full text-gray-200 py-6 absolute z-10">
        <div class="container mx-auto px-4">
          <div class="flex flex-col md:flex-row md:justify-between">
            <div class="mb-4 md:mb-0">
              <h3 class="text-xl font-bold">Rumah Sakit Islam Garam Kalianget</h3>
              <p class="mt-2 font-light">Semoga mendapat nilai yang bagus Aamiin</p>
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
      </footer> -->
      </div>
    </section>
    <!-- Hero -->
    
  </body>
</html>
