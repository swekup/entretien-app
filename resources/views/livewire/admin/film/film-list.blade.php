<div class="py-4">
    <div class="mb-4">
        <input type="text" wire:model="search" placeholder="Rechercher par titre" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
            <th class="px-6 py-3"></th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($films as $film)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $film->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $film->title }}</td>
                <!-- Ajoutez ici les autres colonnes que vous souhaitez afficher -->
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button wire:click="editFilm({{ $film->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editer</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $films->links() }}
    </div>

    @if ($editingFilmId)
        @include('livewire.admin.film.film-edit')
    @endif

</div>

