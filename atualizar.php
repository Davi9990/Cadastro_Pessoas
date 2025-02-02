<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Cadastro de Pessoas</h1>

    <form id="cadastroForm" action="Interfacedecorno.php" method="post">
      <div class="mb-4">
        <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
        <input type="text" id="nome" name="nome" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="mb-4">
        <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
        <input type="email" id="email" name="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Atualizar
      </button>
    </form>
</body>
</html>