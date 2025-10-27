<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un employé — WorkUnity</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  
  <nav class="bg-teal-700 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold tracking-wide">WorkUnity</h1>
      <ul class="flex gap-6 text-sm font-medium">
        <li><a href="{{ route('employer.index') }}" class="hover:text-gray-200 transition">👥 Employés</a></li>
        <li><a href="{{ route('employer.create') }}" class="text-indigo-200 font-semibold">➕ Ajouter</a></li>
      </ul>
    </div>
  </nav>

  
  <main class="flex-grow max-w-lg mx-auto p-8 bg-white shadow-lg rounded-xl mt-10">
    <h2 class="text-2xl font-bold text-center text-teal-700 mb-6">➕ Ajouter un nouvel employé</h2>

    @if ($errors->any())
      <div class="mb-4 bg-red-100 text-red-700 p-3 rounded-lg border border-red-300">
        <ul class="list-disc ml-5 text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('employer.store') }}" method="POST" class="space-y-5">
      @csrf

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">Prénom</label>
        <input type="text" name="prenom" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">Nom</label>
        <input type="text" name="nom" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">Poste</label>
        <input type="text" name="poste" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <div class="flex justify-between items-center pt-4">
        <a href="{{ route('employer.index') }}" class="text-indigo-600 hover:underline text-sm">⬅ Retour à la liste</a>
        <button type="submit" class="bg-teal-700 text-white px-5 py-2 rounded-lg hover:bg-teal-800 font-semibold transition">
          Enregistrer
        </button>
      </div>
    </form>
  </main>

  
  <footer class="bg-teal-700 text-white text-center py-4 mt-auto">
    <p class="text-sm">
      © 2025 <strong>WorkUnity</strong> — Gestion du personnel interne.<br>
      <span class="text-gray-200 text-xs mt-1 block">Développé avec ❤️ par Wijdane</span>
    </p>
  </footer>

</body>
</html>
