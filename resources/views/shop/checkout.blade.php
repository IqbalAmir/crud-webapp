@extends('layouts.app')

@section('content')
    <script src="https://js.stripe.com/v3/"></script>
    @if(count($errors) > 0)
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2"></div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('success_message'))
        <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
            {{ session()->get('success_message') }}
        </div>
    @endif
    <div class="container mx-auto flex flex-col md:flex-row items-center my-6 md:my-12">
        <div class="leading-loose">
            <form action="{{route('checkout.store')}}" method="POST" id="payment-form"
                  class="max-w-xl m- p-20 bg-white rounded shadow-xl">
                @csrf
                <p class="text-gray-800 font-medium">Customer information</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                           type="text" required="" placeholder="Your Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                           type="text" required="" placeholder="Your Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_address">Address</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_address"
                           name="cus_address"
                           type="text" required="" placeholder="Street">
                </div>
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="cus_city">City</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_city" name="cus_city"
                           type="text" required="" placeholder="City">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="hidden block text-sm text-gray-600" for="cus_country">Country</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_country"
                           name="cus_country"
                           type="text" required="" placeholder="Country">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="hidden block text-sm text-gray-600" for="cus_postcode">Post Code</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_postcode"
                           name="cus_postcode"
                           type="text" required="" placeholder="Post Code">
                </div>
                <p class="mt-4 text-gray-800 font-medium">Payment information</p>
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="cus_name">Name on Card</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                           type="text" required="" placeholder="Name on Card">
                </div>
                <label for="card-element">
                    Credit or debit card
                </label>
                <div id="card-element">
                </div>

                <div id="card-errors" role="alert"></div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">
                        Pay
                    </button>
                </div>
            </form>
        </div>

        <div id="summary" class="w-1/4 px-8 py-10">
            <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
            <div class="flex justify-between mt-10 mb-5">
                <span class="font-semibold text-sm uppercase">Items {{\Cart::getContent()->count()}}</span>
            </div>

            @foreach (\Cart::getContent() as $item)
                <div class="border-t mt-8">{{$item->model->name}}</div>
                <div>{{$item->model->presentPrice()}}</div>
                <div class="flex justify-between mt-10 mb-5">

                </div>
            @endforeach

            <div class="border-t mt-8">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total</span>
                    <span>£{{\Cart::getSubTotal()/100}}</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var stripe = Stripe('pk_test_51I4szSG22eGQXUs0W3xPaXH63O4Z0s94t2MuXVnDpgltfKJHFgSEy4R3wmO62LpuQaSmyigaiSVLICZ2dSzZDJwa00C0ncU1TD');
            var elements = stripe.elements();
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            card.mount('#card-element');

            card.on('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler(token) {
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        })();
    </script>
@endsection
