<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WorkUnity — Liste des employés</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  
  <nav class="bg-teal-700 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold tracking-wide">WorkUnity</h1>

      <ul class="flex gap-6 text-sm font-medium">
        <li><a href="{{ route('employer.index') }}" class="hover:text-gray-200 transition">👥 Employés</a></li>
        <li><a href="{{ route('employer.create') }}" class="hover:text-gray-200 transition">➕ Ajouter</a></li>
      </ul>

      
    </div>
  </nav>

  
  <main class="flex-grow max-w-7xl mx-auto p-6">
    @if(session('success'))
    <div class="mb-4 max-w-7xl p-4 rounded-lg bg-green-100 text-green-800 border border-green-300">
        {{ session('success') }}
    </div>
    @endif

    <h1 class="text-3xl font-bold mb-8 text-center text-teal-700">
      👨‍💼 Liste des employés de WorkUnity
    </h1>

    
    <div class="mb-6 text-right">
      <a href="{{ route('employer.create') }}"
         class="bg-teal-700 hover:bg-teal-800 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
         + Ajouter un employé
      </a>
    </div>

    
    <div class="overflow-x-auto border border-gray-300 rounded-lg shadow-lg bg-white">
      <table class="w-full table-auto border-collapse">
        <thead class="bg-teal-700 text-white">
          <tr>
            <th class="py-4 px-6 text-left border-b border-gray-300">Prénom</th>
            <th class="py-4 px-6 text-left border-b border-gray-300">Nom</th>
            <th class="py-4 px-6 text-left border-b border-gray-300">Email</th>
            <th class="py-4 px-6 text-left border-b border-gray-300">Poste</th>
            <th class="py-4 px-6 text-center border-b border-gray-300">Actions</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
          @forelse ($employers as $employer)
          <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">{{ $employer->prenom }}</td>
            <td class="py-4 px-6">{{ $employer->nom }}</td>
            <td class="py-4 px-6">{{ $employer->email }}</td>
            <td class="py-4 px-6">{{ $employer->poste }}</td>
            <td class="py-4 px-6 flex justify-center gap-3">
              <a href="{{ route('employer.show', $employer->id) }}"
                 class="bg-teal-500 hover:bg-teal-600 text-white text-sm px-4 py-2 rounded-lg transition">
                 Détails
              </a>

              <a href="{{ route('employer.edit', $employer->id) }}"
                 class="bg-orange-400 hover:bg-orange-600 text-white text-sm px-4 py-2 rounded-lg transition">
                 Modifier
              </a>

              <form action="{{ route('employer.destroy', $employer->id) }}" method="POST"
                    onsubmit="return confirm('Voulez-vous vraiment supprimer cet employé ?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded-lg transition">
                        Supprimer
                </button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center py-6 text-gray-500">Aucun employé trouvé.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
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
