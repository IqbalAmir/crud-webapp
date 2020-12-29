@extends('layouts.app')

@section('content')
    <div class=" container mx-auto flex items-center flex-wrap pt-10 pb-12">

            @foreach ($products as $product)
                <div class=" -full md:w-1/3 xl:w-2/4 p-12 flex flex-col">
                    <div class="flex">

                        <div>
                            <h1 class="text-xl font-medium text-black-500">{{$product->name}}</h1>
                            <img src="/images/tshirt.jpg" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
    </div>



@endsection

