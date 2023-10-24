<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Note Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Note Details</h1>

                <div class="border rounded p-4">
                    <h2 class="text-xl font-semibold text-white">{{ $note->title }}</h2>
                    <p class="text-gray-600 dark:text-gray-400">{{ $note->content }}</p>
                </div>

                <div class="mt-4">
                    <a href="{{ route('notes.edit', ['note' => $note]) }}" class="text-blue-600 dark:text-blue-400">Edit Note</a>
                </div>

                <div class="mt-4">
                    <form action="{{ route('notes.destroy', ['note' => $note]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 dark:text-red-400">Delete Note</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
