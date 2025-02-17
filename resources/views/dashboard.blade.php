<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Liste des Produits
        </h2>
    </x-slot>

    <div class="p-6 bg-gray-900 min-h-screen text-white">
        <!-- Barre de recherche et bouton Ajouter -->
        <div class="flex justify-between items-center mb-4">
            <form method="GET" action="{{ route('produits.index') }}" class="flex space-x-2">
                <input
                    type="text"
                    name="search"
                    placeholder="Rechercher un produit..."
                    value="{{ request('search') }}"
                    class="p-2 rounded-lg border border-gray-600 bg-gray-800 text-white focus:ring focus:ring-blue-500"
                />
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md">
                    Rechercher
                </button>
            </form>
            <a href="{{ route('produits.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow-md">
                Ajouter
            </a>
        </div>

        <!-- Tableau des produits -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-600 text-white">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="p-4 border-b border-gray-600 text-left">Nom</th>
                        <th class="p-4 border-b border-gray-600 text-left">Prix</th>
                        <th class="p-4 border-b border-gray-600 text-left">Quantité</th>
                        <th class="p-4 border-b border-gray-600 text-left">Description</th>
                        <th class="p-4 border-b border-gray-600 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($produits) && $produits->count() > 0)
    @foreach ($produits as $produit)
        <tr>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->prix }} DH</td>
            <td>{{ $produit->quantite }}</td>
            <td>{{ $produit->description }}</td>
            <td class="text-center">
                <a href="{{ route('produits.edit', $produit->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Modifier</a>
                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</button>
                </form>
            </td>

        </tr>
    @endforeach
@else
    <tr>
        <td colspan="5" class="text-center">Aucun produit trouvé.</td>
    </tr>
@endif
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
         <div class="mt-4">
            {{ $produits->links() }}
        </div>
    </div>
</x-app-layout>
