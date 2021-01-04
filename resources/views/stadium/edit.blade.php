@extends('layouts.app')

@section('content')
    <div id="page" class="container">
        @can('manage_reviews', $stadium)
            <form method="POST" action="{{$stadium->path()}}">
                @csrf
                @method('PUT')
                @include('partials._form')
            </form>
        @endcan
    </div>
@endsection

