@extends('layouts.app')

@section('content')

        <div id="page" class="container">

            <div class="  tracking-wide text-red-500 text-5xl pt-6 ">
                <h1>Add New Stadium</h1>
            </div>

            <form method="POST" action="/stadium">
                @csrf
                @include('partials._form')

            </form>

        </div>





@endsection

