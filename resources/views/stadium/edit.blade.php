@extends('layouts.app')

@section('content')


    @can('edit-stadium', $stadium)

        <div id="page" class="container">

            <div class="  tracking-wide text-red-500 text-5xl pt-6 ">
                <h1>Edit Stadium Details</h1>
            </div>

            <form method="POST" action="{{$stadium->path()}}">
                @csrf
                @method('PUT')

                @include('partials._form')
            </form>

        </div>

        @else

        <div class="h-screen w-screen bg-purple-600 flex justify-center content-center flex-wrap">
            <p class="font-sans text-white error-text">404</p>
        </div>

        @endcan



@endsection

