@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div>
        <header>
            <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
                <form action="{{url('/searchproduct')}}">
                    <input
                        class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline"
                        name="query" id="search" type="search" placeholder="Search">
                </form>
            </div>
        </header>
        <main class="container-sm mx-auto flex items-center flex-wrap pt-6 pb-6">
            @foreach ($products as $product)
                <div class="w-full max-w-xs mx-auto rounded-md shadow-md overflow-hidden pt-12">
                    <h1 class="object-contain text-sm font-medium text-black-500">{{$product->name}}</h1>
                    <img src="/images/tshirt.jpg">
                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                        <button type="submit"
                                class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                        </button>
                    </form>
                    <div class="px-5 py-3">
                        <h1>{{$product->presentPrice()}}</h1>
                    </div>
                </div>
            @endforeach
        </main>
        <footer class="bg-gray-200">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Stadium Tracker</a>
                <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
            </div>
        </footer>
    </div>
@endsection
