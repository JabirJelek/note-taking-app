<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">All Notes</h1>
    
                @if($notes->count() > 0)
                    <ul class="mt-4 space-y-4">
                        @foreach ($notes as $note)
                            <li class="border rounded p-4">
                                <h2 class="text-xl font-semibold">{{ $note->title }}</h2>
                                <p class="text-gray-600 dark:text-gray-400">{{ $note->content }}</p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="p-6 text-gray-600 dark:text-gray-400">No notes found.</p>
                @endif
            </div>
        </div>
    </div>
    
</x-app-layout>
