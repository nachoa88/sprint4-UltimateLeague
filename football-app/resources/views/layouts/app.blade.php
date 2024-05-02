<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>League Manager</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-sky-900 flex flex-col min-h-screen">
    <header class="text-white mb-8">
        <nav class="bg-sky-950 border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/app-logo.png') }}" class="h-8" alt="League Manager Logo" />
                    <span class="self-center text-2xl text-white font-semibold whitespace-nowrap">League Manager</span>
                </a>
                <button data-collapse-toggle="navbar-solid-bg" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
                    aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                    <ul
                        class="flex flex-col font-medium mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent bg-gray-800 border-gray-700">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 md:p-0 rounded hover:bg-gray-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-500 {{ request()->is('/') ? 'text-blue-500' : 'text-white' }}"
                                @if (Route::currentRouteName() == 'home') aria-current="page" @endif>Home</a>
                        </li>
                        <li>
                            <a href="{{ route('teams.index') }}"
                                class="block py-2 px-3 md:p-0 rounded hover:bg-gray-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-500 {{ request()->is('teams*') ? 'text-blue-500' : 'text-white' }}"
                                @if (Route::currentRouteName() == 'teams.index') aria-current="page" @endif>Teams</a>
                        </li>
                        <li>
                            <a href="{{ route('games.index') }}"
                                class="block py-2 px-3 md:p-0 rounded hover:bg-gray-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-500 {{ request()->is('games*') ? 'text-blue-500' : 'text-white' }}"
                                @if (Route::currentRouteName() == 'games.index') aria-current="page" @endif>Games</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 rounded hover:bg-gray-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-500 {{ request()->is('login') ? 'text-blue-500' : 'text-white' }}"
                                @if (Route::currentRouteName() == 'login.index') aria-current="page" @endif>Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container mx-auto px-4 max-w-screen-lg flex-grow">

        @yield('content')

    </div>

    <footer class="bg-sky-950 mt-8">
        <div class="mx-auto w-full max-w-screen-xl p-4">
            <div class="md:flex md:justify-between">
                <div class="flex items-center">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('images/iap-logo.png') }}" class="h-12 me-3" alt="IAP-Dev Logo" />
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">About</h2>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/nachoa88" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://ignacioalbiol.tech/" class="hover:underline">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-2 border-gray-600 sm:mx-auto lg:my-4" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-400 sm:text-center">© 2024 <a
                        href="https://ignacioalbiol.tech/" class="hover:underline">IAP-Dev</a>. All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>


</body>

</html>
