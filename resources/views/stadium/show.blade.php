@extends('layouts.app')

@section('content')




    @can('edit-stadium', $stadium)
        <form method="POST" action="{{$stadium->path()}}">
            @method ('DELETE')        @csrf
            <button
                class=" shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-2 px-9 "
                type="submit">
                DELETE
            </button>
        </form>


        <div class=" lg:py-6 text-left">
            <a href="{{$stadium->path()}}/edit"
               class=" shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-1 px-12 ">EDIT</a>

        </div>

    @endcan





    @include('partials._displayinfo')

@endsection

