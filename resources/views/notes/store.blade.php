<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Note') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <div class="mt-6 space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-900 dark:text-white" required>
                    </div>
                </div>
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                    <div class="mt-1">
                        <textarea name="content" id="content" rows="3" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-900 dark:text-white" required></textarea>
                    </div>
                </div>
                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-400">
                            Create Note
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
