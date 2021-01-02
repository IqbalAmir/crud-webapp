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
                                       onclick="{{route('cart.index')}}"></a>
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
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='/js/script.js'></script>
</html>


