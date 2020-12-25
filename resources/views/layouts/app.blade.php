<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div id="app">
    <header class="bg-blue-900 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/stadium') }}"
                   class="text-4xl  no-underline  inline-block py-2 px-4 text-red-500 hover:text-purple-400 font-semibold ">{{ __('Stadiums') }} </a>
                <a href="{{ route('stadium.create') }}"
                   class="text-4xl  no-underline  inline-block py-2 px-4 text-red-500 hover:text-purple-400 font-semibold ">{{ __('Add Stadium') }} </a>
            </div>

            <nav class="lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1">
                @guest
                    <a class="fas fa-sign-in-alt fa-2x px-3 text-red-500 hover:text-purple-400"
                       href="{{ route('login') }}"></a>
                    @if (Route::has('register'))
                        <a class=" fas fa-user-plus fa-2x text-red-500 hover:text-purple-400 "
                           href="{{ route('register') }}"></a>
                    @endif
                @else
                    @auth
                        <a href="{{ route('home') }}"
                           class="text-3xl text-lg-right text-red-500  no-underline  inline-block py-2 px-4 hover:text-purple-400 font-semibold ">{{ __('My Stadiums') }} </a>
                        <a href="{{ route('contact') }}"
                           class="text-3xl text-lg-right text-red-500  no-underline  inline-block py-2 px-4 hover:text-purple-400 font-semibold ">{{ __('Contact Us') }} </a>
                        <a href="{{ route('logout') }}"
                           class="fas fa-sign-out-alt fa-2x text-red-500 hover:text-purple-400"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endauth
                @endguest
            </nav>
        </div>
    </header>
    @yield('content')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='/js/script.js'></script>
</html>


