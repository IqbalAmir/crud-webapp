@extends('layouts.app')

@section('content')
    <div id="page" class="container">
        <form method="POST" action="{{$stadium->path()}}">
            @csrf
            @method('PUT')
            @include('partials._form')
        </form>
    </div>
@endsection

