<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet" />
    <link href="assets/image/logo_rsi.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
  </head>
  <body class="bg-slate-300">
    <!-- Hero -->
    <section id="home">
      <div class="w-full h-screen relative">
        <div class="bg-cyan-800 py-3 w-full flex justify-center space-x-10 text-lg text-white text-opacity-70 absolute top-0 z-20 items-center font-semibold drop-shadow-lg">
          <img src="assets/image/logo_rsi.png" class="w-14 h-14 rounded-lg mr-10" alt="" />
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Beranda</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Profil</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Layanan</a>
          <a href="index.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Kontak kami</a>
          <a href="pendaftaran.php" class="hover:text-white hover:duration-500 hover:ease-in-out">Pendaftaran Online</a>
          <a href="#" class="p-2 w-24 text-center text-white rounded-xl bg-green-600  hover:bg-green-500 hover:text-black hover:duration-500 ease-in-out hover:scale-110">Masuk</a>
            </div>
            <div class="flex items-center justify-center h-screen w-screen">
                <div class="w-full h-screen z-10 absolute top-0 bg-black opacity-70"></div>
                <img src="assets/image/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg" class="h-screen w-full object-cover blur-sm absolute top-0 z-0" alt="" />
                 <div class="w-96 mt-20 p-6 shadow-lg rounded-lg z-20 bg-opacity-10 border-4 border-white">
                    <h1 class="text-3xl block text-center font-semibold text-white opa"><i class="fa-regular fa-user" style="color: #ffffff;"></i> Login</h1>
                    <hr class="mt-3">
                    <form action="form_login_act.php" method="post">
                    <div class="mt-3">
                        <label for="username" class="block text-base mb-2 text-white font-semibold">Username</label>
                        <input type="text" name="username" id="username" class="border-white text-white bg-opacity-0 bg-cyan-500 rounded-md border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Masukkan Username">
                    </div>
                    <div class="mt-3">
                        <label for="password" class="block text-base mb-2 text-white font-semibold">Password</label>
                        <input type="password" name="password" id="password" class="border-white text-white bg-opacity-0 bg-cyan-400 rounded-md border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Masukkan Password">
                    </div>
                    <div class="mt-3 flex justify-end items-center">
                        <div>
                            <a href="#" class="text-indigo-300 underline underline-offset-2">Lupa Password</a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>
                                <button type="submit" class="bg-green-500 hover:bg-green-700 duration-700 w-full mt-5 rounded-md text-xl text-white font-medium py-1 px-2"><i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i> Login</button>
                        </div>
                    </div>
                    </form>
                 </div>
            </div>
        </div>
    </section>
    <!-- Hero -->
    
  </body>
</html>
