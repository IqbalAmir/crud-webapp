@extends('layouts.app')

@section('content')
    <form action="{{url('/search')}}">
        <div class="p-8">
            <div class="bg-white flex rounded-full shadow-xl">
                <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none"
                       name="query" id="search" type="search" placeholder="Search">

                <div class="p-2">
                    <button class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
    @include('partials._displayhome')
@endsection

