<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body class="flex justify-center items-center h-screen">
        <div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <img src="{{ asset('pictures/Vaatory.png') }}" alt="Logo" class="mx-auto h-32 w-auto" />
                            <!-- Remplacez 'images/Vaatory.png' par le chemin correct de votre image -->
                            {{ __("Welcome ") }} {{ Auth::user()->name }} !
                            <!-- Utilisation de Auth::user()->name pour récupérer le nom de l'utilisateur -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
