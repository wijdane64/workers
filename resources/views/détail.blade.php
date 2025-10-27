<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détail employé</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  <nav class="bg-teal-700 text-white shadow-md">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">WorkUnity</h1>
      <ul class="flex gap-6 text-sm font-medium">
        <li><a href="{{ route('employer.index') }}" class="hover:text-gray-200">Employés</a></li>
      </ul>
    </div>
  </nav>

  <main class="flex-grow max-w-xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-teal-600 text-center">Détail employé</h1>

    <div class="bg-white p-6 rounded-lg shadow-md space-y-4">
      <p><strong>Prénom:</strong> {{ $employer->prenom }}</p>
      <p><strong>Nom:</strong> {{ $employer->nom }}</p>
      <p><strong>Email:</strong> {{ $employer->email }}</p>
      <p><strong>Poste:</strong> {{ $employer->poste }}</p>

      <div class="mt-4">
        <a href="{{ route('employer.index') }}" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg">Retour</a>
      </div>
    </div>
  </main>
  <footer class="bg-teal-700 text-white text-center py-4 mt-auto">
    <p class="text-sm">
      © 2025 <strong>WorkUnity</strong> — Gestion du personnel interne.<br>
      <span class="text-gray-200 text-xs mt-1 block">Développé avec ❤️ par Wijdane</span>
    </p>
  </footer>
</body>
</html>
