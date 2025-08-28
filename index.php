<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rodrigo Artes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Rodrigo Diguinho Artes</h1>
      <div class="hidden md:flex items-center space-x-8 font-medium">
        <ul class="flex space-x-6">
          <li><a href="index.php" class="hover:text-indigo-600 transition">Início</a></li>
          <li><a href="#sobre" class="hover:text-indigo-600 transition">Sobre</a></li>
          <li><a href="galeria.php" class="hover:text-indigo-600 transition">Galeria</a></li>
          <li><a href="#servicos" class="hover:text-indigo-600 transition">Serviços</a></li>
          <li><a href="#contato" class="hover:text-indigo-600 transition">Contato</a></li>
        </ul>
        <div class="flex space-x-3">
          <a href="entrar.php" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white transition">Entrar</a>
          <a href="cadastrar.php" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Cadastrar</a>
        </div>
      </div>
      <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">☰</button>
    </div>
  </nav>

  <div class="pt-16"></div>

  <!-- Banner Dinâmico -->
  <div class="swiper mySwiper w-full h-[1000px]">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="imagens/chaplin.png" class="w-full h-[1000px] object-cover" alt="Chaplin">
      </div>
      <div class="swiper-slide">
        <img src="imagens/jesus.png" class="w-full h-[1000px] object-cover" alt="Jesus">
      </div>
      <div class="swiper-slide">
        <img src="imagens/bob marley.png" class="w-full h-[1000px] object-cover" alt="Bob Marley">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: { delay: 3000, disableOnInteraction: false },
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    });
  </script>

</body>
</html>
