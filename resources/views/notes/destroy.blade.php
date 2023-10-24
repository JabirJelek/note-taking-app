<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Delete Note') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold">Are you sure you want to delete this note?</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">This action cannot be undone.</p>

                <form action="{{ route('notes.destroy', ['note' => $note]) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-4 rounded hover:bg-red-600">Delete Note</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
