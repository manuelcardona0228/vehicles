<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="flex justify-between items-center py-4 px-6 bg-white dark:bg-gray-200 border-b-4 border-my-blue-100">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>

                        <div class="relative mx-4 lg:mx-0">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">

                            </span>

                        </div>
                    </div>

                    <div class="flex items-center">
                        <a class="px-2 py-1 rounded font-medium text-gray-700 hover:text-gray-500" href="{{ route('register') }}">Registrate</a>
                        <a class="px-2 py-1 rounded font-medium text-gray-700 hover:text-gray-500" href="{{ route('login') }}">Iniciar Sesión</a>
                    </div>
                </header>
                <main class="flex-1 bg-gray-300 dark:bg-gray-700">
                    <div class="font-sans text-gray-900 antialiased">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
