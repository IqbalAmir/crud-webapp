@extends('layouts.app')

@section('content')




    <form method="POST" action="{{$stadium->path()}}">
        @method ('DELETE')        @csrf
        <button class=" shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-2 px-12 " type="submit">
           DELETE
        </button>
    </form>

    @include('partials._displayinfo')

    <a href="{{$stadium->path()}}/edit" class=" shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-1 px-16 ">EDIT</a>
@endsection

