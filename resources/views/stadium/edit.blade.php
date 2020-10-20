@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Stadium Details</h1>


            <form method="POST" action="{{$stadium->path()}}">
                @csrf
                @method('PUT')

                @include('partials._form')
            </form>

        </div>
    </div>




@endsection

