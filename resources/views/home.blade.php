<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-4">
                @foreach($users as $user)
                    <div class="p-6 bg-white flex justify-between  overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="text-gray-900">
                            {{ $user->name }}
                        </div>

                        <a class="bg-teal-500 text-white p-1 rounded-md"
                            href="{{ route('message.send', $user) }}"
                        >
                            Message
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
