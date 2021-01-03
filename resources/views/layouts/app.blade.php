<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a class="hidden text-purple-400 text-2xl lg:block h-6 w-auto text-gray-300">StadiumTracker</a>
                </div>
                <div class="hidden sm:block sm:ml-12">
                    <div class="flex space-x-4">
                        <a href="{{ url('/stadium') }}"
                           class="text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-lg font-medium">Stadiums</a>
                        <a href="{{ route('stadium.create') }}"
                           class="text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-lg font-medium">Add
                            Stadium</a>
                        <a href="{{ route('shop.index') }}"
                           class="text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-lg font-medium">Shop</a>
                        <a href="{{ route('contact') }}"
                           class="text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-lg font-medium">Contact</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @guest
                    <div class="ml-3 relative">
                        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                            <a href="{{ route('login') }}"
                               class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                    Register
                                </a>
                            @endif
                            @else
                                @auth
                                    <a href="{{ route('home') }}"
                                       class="text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-lg font-medium ">{{ __('My Stadiums') }} </a>
                                    <a href="{{ route('cart.index') }}"
                                       class="fas fa-shopping-cart fa-1x text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-xl font-medium "
                                       onclick="{{route('cart.index')}}">{{\Cart::getContent()->count()}}</a>
                                    <a href="{{ route('logout') }}"
                                       class="fas fa-sign-out-alt fa-2x text-red-500 hover:bg-gray-700 hover:text-purple-400 px-3 py-2 rounded-md text-xl font-medium "
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                @endauth
                            @endguest
                        </div>
                    </div>
            </div>
        </div>
    </div>
</nav>

<nav class="nav flex flex-wrap items-center justify-between px-4">
    <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest">
        <svg class="fill-current h-8 mr-2 w-8" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5" clip-rule="evenodd" viewBox="0 0 716 895">
            <path d="M357.776 0l357.77 178.885v536.657l-357.77 178.89L0 715.542V178.885"></path>
            <path class="text-white fill-current" d="M357.776 804.982l268.32-134.16v-178.89l-89.44-44.72 89.44-44.72V223.606L357.776 89.442v626.1l-178.89-89.44V178.885l-89.443 44.721v447.216l268.333 134.16z"></path>
            <path d="M447.216 670.822l89.44-44.72v-89.45l-89.44-44.72v178.89zM447.216 402.492l89.44-44.721v-89.443l-89.44-44.722"></path>
        </svg>
        <span class="font-semibold text-xl tracking-tight">Luke Bennett</span>
    </div>

    <input class="menu-btn hidden" type="checkbox" id="menu-btn">
    <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
        <span class="navicon bg-grey-darkest flex items-center relative"></span>
    </label>

    <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto">
        <li class="border-t md:border-none">
            <a href="/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold">Home</a>
        </li>

        <li class="border-t md:border-none">
            <a href="/about/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">About</a>
        </li>

        <li class="border-t md:border-none">
            <a href="/blog/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Blog</a>
        </li>

    </ul>
</nav>

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='/js/script.js'></script>
</html>


