@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Add Stadium</h1>


            <form method="POST" action="/stadium">
                @csrf
                @include('partials._form')

            </form>

        </div>
    </div>




@endsection

