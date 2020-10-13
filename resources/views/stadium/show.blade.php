@extends('layouts.app')

@section('content')

    <body>
    @yield ('content')
    </body>

    <h1 class="py-10 font-sans">{{$stadium->name}}</h1>

    <h1 class="py-10 font-sans">{{$stadium->capacity}}</h1>


    <p class="py-10">
        {{$stadium->body}}
    </p>




@endsection

