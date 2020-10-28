@extends('layouts.app')

@section('content')

  <x-back-button />

    @include('partials._displayinfo')



    @can('edit-stadium', $stadium)

        <a href="{{$stadium->path()}}/edit"><i class="fas fa-edit text-red-500 hover:text-purple-400 fa-3x px-3 "></i></a>

        <form method="POST" action="{{$stadium->path()}}">
            @method ('DELETE')        @csrf
            <button
                class="fas fa-trash-alt fa-3x text-red-500 hover:text-purple-400 px-3 py-3"
                type="submit">
            </button>
        </form>

    @endcan







@endsection

