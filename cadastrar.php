<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar - Rodrigo Artes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Rodrigo Diguinho Artes</h1>
      <div class="hidden md:flex items-center space-x-8 font-medium">
        <ul class="flex space-x-6">
          <li><a href="index.php" class="hover:text-indigo-600 transition">Início</a></li>
        </ul>
        <div class="flex space-x-3">
          <a href="entrar.php" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg">Entrar</a>
          <a href="cadastrar.php" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">Cadastrar</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="pt-20"></div>

  <!-- Formulário de Cadastro -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-2xl p-8">
      <h2 class="text-2xl font-bold text-center mb-6 text-indigo-600">Cadastrar</h2>
      <form action="cadastrar_action.php" method="POST" class="space-y-4">
        <div>
          <label class="block text-sm font-medium">Nome Completo</label>
          <input type="text" name="nome" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium">Email</label>
          <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium">Senha</label>
          <input type="password" name="senha" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">Cadastrar</button>
      </form>
    </div>
  </section>

</body>
</html>
