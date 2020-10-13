<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StadiumController') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div id="app">
    <header class="bg-blue-900 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="text-2xl  no-underline  inline-block py-2 px-4 text-orange-500 hover:text-blue-800 font-semibold ">
                    {{ config('app.name', 'Laravel') }}
                    <a href="{{ url('/stadium') }}" class="text-2xl  no-underline  inline-block py-2 px-4 text-orange-500 hover:text-blue-800 font-semibold ">{{ __('All Stadiums') }} </a>
                    <a href="{{ url('/') }}" class="text-2xl  no-underline  inline-block py-2 px-4 text-orange-500 hover:text-blue-800 font-semibold ">{{ __('News') }} </a>
                    <a href="{{ url('/contactus') }}" class="text-2xl  no-underline  inline-block py-2 px-4 text-orange-500 hover:text-blue-800 font-semibold ">{{ __('Contact Us') }} </a>
                </a>
            </div>

            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                <!-- Authentication Links -->
                    @auth
                        <a href="{{ url('/') }}" class="text-2xl  no-underline  inline-block py-2 px-4 text-orange-500 hover:text-blue-800 font-semibold ">{{ __('My Tracker') }} </a>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
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
</html>
