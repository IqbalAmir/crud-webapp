@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6">
        @if(session()->has('success_message'))
            <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                {{ session()->get('success_message') }}
            </div>
        @endif
        @if(count($errors)) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>

        @if (\Cart::getTotalQuantity() > 0 )
        @else
            <h1 class=" w-full border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">No Items in
                Basket</h1>
        @endif
    </div>
    <body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                </div>
                @foreach (\Cart::getContent() as $item)
                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <div class="flex w-2/5"> <!-- product -->
                            <div class="w-20">
                                <img src="/images/tshirt.jpg">
                            </div>
                            <div class="flex flex-col justify-between ml-4 flex-grow">
                                <span class="font-bold text-sm">{{$item->model->name}}</span>
                                <span class="text-red-500 text-xs">{{$item->model->slug}}</span>
                                <form method="POST" action="{{route('cart.destroy', $item->model->id)}}">
                                    @method ('DELETE')        @csrf
                                    <button type="submit"
                                            class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                        <span class="text-center w-1/5 font-semibold text-sm"></span>
                        <span
                            class="text-left w-1/5 font-semibold text-sm text-left">{{$item->model->presentPrice()}}</span>
                    </div>
                @endforeach
                <a href="{{route('shop.index')}}" class="flex font-semibold text-indigo-600 text-sm mt-10">
                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/>
                    </svg>
                    Continue Shopping
                </a>
            </div>
            <div id="summary" class="w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase">Items {{\Cart::getContent()->count()}}</span>
                </div>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <span>£{{\Cart::getSubTotal()/100}}</span>
                    </div>
                    <a href="{{route('checkout.index')}}"
                       class="  px-3 py-3 bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
                        Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    </body>
    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">StadiumTracker</a>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
        </div>
    </footer>
@endsection

