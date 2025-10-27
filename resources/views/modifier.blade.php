<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier un employé</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  
  <nav class="bg-teal-700 text-white shadow-md">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">WorkUnity</h1>
      <ul class="flex gap-6 text-sm font-medium">
        <li><a href="{{ route('employer.index') }}" class="hover:text-gray-200">Employés</a></li>
        <li><a href="{{ route('employer.create') }}" class="hover:text-gray-200">Ajouter</a></li>
      </ul>
    </div>
  </nav>

  <main class="flex-grow max-w-2xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center text-teal-600">Modifier un employé</h1>

    <form action="{{ route('employer.update', $employer->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-4">
      @csrf
      @method('PUT')

      <div>
        <label class="block mb-1 font-semibold">Prénom</label>
        <input type="text" name="prenom" value="{{ old('prenom', $employer->prenom) }}" class="w-full border px-3 py-2 rounded-lg">
        @error('prenom') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block mb-1 font-semibold">Nom</label>
        <input type="text" name="nom" value="{{ old('nom', $employer->nom) }}" class="w-full border px-3 py-2 rounded-lg">
        @error('nom') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block mb-1 font-semibold">Email</label>
        <input type="email" name="email" value="{{ old('email', $employer->email) }}" class="w-full border px-3 py-2 rounded-lg">
        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block mb-1 font-semibold">Poste</label>
        <input type="text" name="poste" value="{{ old('poste', $employer->poste) }}" class="w-full border px-3 py-2 rounded-lg">
        @error('poste') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div class="flex justify-between items-center mt-4">
        <a href="{{ route('employer.index') }}" class="text-gray-600 hover:underline">Annuler</a>
        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold">Modifier</button>
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
