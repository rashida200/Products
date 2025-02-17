<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Modifier le Produit : {{ $produit->nom }}
        </h2>
    </x-slot>

    <div class="p-6 bg-gray-900 min-h-screen text-white">
        <!-- Formulaire de modification -->
        <form action="{{ route('produits.update', $produit->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="nom" class="block text-lg font-medium">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom', $produit->nom) }}" class="p-2 w-full rounded-lg border border-gray-600 bg-gray-800 text-white focus:ring focus:ring-blue-500" required>
                @error('nom')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="prix" class="block text-lg font-medium">Prix</label>
                <input type="number" name="prix" id="prix" value="{{ old('prix', $produit->prix) }}" class="p-2 w-full rounded-lg border border-gray-600 bg-gray-800 text-white focus:ring focus:ring-blue-500" required>
                @error('prix')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="quantite" class="block text-lg font-medium">Quantité</label>
                <input type="number" name="quantite" id="quantite" value="{{ old('quantite', $produit->quantite) }}" class="p-2 w-full rounded-lg border border-gray-600 bg-gray-800 text-white focus:ring focus:ring-blue-500" required>
                @error('quantite')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-lg font-medium">Description</label>
                <textarea name="description" id="description" rows="4" class="p-2 w-full rounded-lg border border-gray-600 bg-gray-800 text-white focus:ring focus:ring-blue-500" required>{{ old('description', $produit->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg shadow-md">Modifier le Produit</button>
            </div>
        </form>
    </div>
</x-app-layout>
