@extends('layouts.app')

@section('content')

    <body>
    @yield ('content')
    </body>

    <a href="/stadium/{{$stadium->id}}/edit" class="btn btn-default">Edit</a>
    <form method="POST" action="/stadium/{{$stadium->id}}">
        @method ('DELETE')
        @csrf
        <button class="button is-link" type="submit">Delete</button>
    </form>

    <h1 class="py-10 font-sans">{{$stadium->name}}</h1>

    <h1 class="py-10 font-sans">{{$stadium->capacity}}</h1>


    <p class="py-10">
        {{$stadium->body}}
    </p>




@endsection

