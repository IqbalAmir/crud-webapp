@extends('layouts.app')

@section('content')

    <div id="page" class="container">

        <form method="POST" action="/contact">
            @csrf

            <div class=" flex items-center  pt-10 pb-12 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid--name">
                    Email
                </label>

                <input
                    class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-6 leading-tight focus:outline-none focus:bg-white"
                    type="text" id="email" name="email">

                @error('email')
                <p class="text-red-500 text-lg italic">{{$message}}</p>
                @enderror

            </div>


            {{--<div class=" flex items-center  pt-10 pb-12 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">--}}
            {{--<label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid--name">--}}
            {{--Contact Name--}}
            {{--</label>--}}

            {{--<input--}}
            {{--class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"--}}
            {{--type="text" id="email" name="email">--}}

            {{--@error('name')--}}
            {{--<p class="text-red-500 text-lg italic">{{$errors->first('name')}}</p>--}}
            {{--@enderror--}}

            {{--</div>--}}


            {{--<div class=" flex items-center  pt-10 pb-12 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">--}}
            {{--<label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid--name">--}}
            {{--Contact Name--}}
            {{--</label>--}}

            {{--<input--}}
            {{--class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"--}}
            {{--type="text" id="email" name="email">--}}

            {{--@error('name')--}}
            {{--<p class="text-red-500 text-lg italic">{{$errors->first('name')}}</p>--}}
            {{--@enderror--}}

            {{--</div>--}}


            <button
                class="  md:w-1/2 shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-2 px-12 "
                type="submit">
                Submit
            </button>

            @if (session('message'))
                <p class="text-green-500 text-small mt-2">
                    {{session('message')}}
                </p>
            @endif
        </form>

    </div>

@endsection
