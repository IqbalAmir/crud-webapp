@extends('layouts.app')

@section('content')


    @can('edit-stadium', $stadium)

        <div id="page" class="container">

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

