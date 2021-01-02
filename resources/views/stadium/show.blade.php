@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-col md:flex-row items-center my-6 md:my-12">
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
            <h1 class="font-bold text-red-600 text-6xl my-2 ">{{$stadium->name}}</h1>
            <h1 class="font-weight-normal text-red-600 text-3xl my-4 pt-12"> Capacity of {{$stadium->capacity}} </h1>
            <p class="font-italic text-red-600 text-2xl mb-8 pt-12">{{$stadium->body}}</p>
        </div>
        <div class="w-full lg:w-1/2 lg:py-6 text-center">
            <img src="https://loremflickr.com/320/240/football,{{$stadium->name}}?random">
        </div>
    </div>

    @can('manage_reviews', $stadium)
        <a href="{{$stadium->path()}}/edit"><i
                class="fas fa-edit text-red-500 hover:text-purple-400 fa-3x px-3 "></i></a>
        <form method="POST" action="{{$stadium->path()}}">
            @method ('DELETE')        @csrf
            <button
                class="fas fa-trash-alt fa-3x text-red-500 hover:text-purple-400 px-3 py-3"
                type="submit">
            </button>
        </form>
    @endcan
    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Stadium Tracker</a>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
        </div>
    </footer>
@endsection

