<div id="editFilmModal" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
    <div class="bg-white p-4 rounded-lg w-1/2">
        <h2 class="text-lg font-bold mb-4">Edit Film</h2>
        <form wire:submit.prevent="updateFilm">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" wire:model="title" id="title" placeholder="Title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="overview" class="block text-sm font-medium text-gray-700">Overview</label>
                <textarea type="text" wire:model="overview" id="overview" placeholder="Overview" class="h-20 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" ></textarea>
            </div>
            <div class="mt-4 flex justify-end">
                <button type="submit" class="inline-flex items-center mr-5 px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Mettre à jour</button>
                <button type="button" wire:click="cancelUpdate" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-white hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Annuler</button>
            </div>
        </form>
    </div>
</div>
