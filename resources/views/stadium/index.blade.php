@extends('layouts.app')

@section('content')

    {{--<body>--}}
    {{--@yield ('content')--}}
    {{--</body>--}}





    <div class="container mx-auto flex items-center flex-wrap pt-10 pb-12">
        @foreach ($stadiums as $stadium)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">



                <div class="hover:grow hover:shadow-lg ">
                    <div class="pt-8 flex items-center justify-between lg:text-2xl">
                        <a href="{{$stadium->path()}}">
                            {{$stadium->name}}
                        </a>
                    </div>

                </div>

            </div>
        @endforeach






    </div>




@endsection

