@extends('layouts.app')

@section('content')


    <body>
    @yield ('content')
    </body>



<!DOCTYPE html>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
