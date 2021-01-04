@extends('layouts.app')

@section('content')
    @if(session()->has('success_message'))
        <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
            {{ session()->get('success_message') }}
        </div>
    @endif
    <div class="container mx-auto flex flex-col md:flex-row items-center my-6 md:my-12">
        <div id="page" class="container">
            <form method="POST" action="/contact" enctype="multipart/form-data">
                @csrf
                <div class=" flex items-center w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                    <label
                        class="w-64 flex flex-col items-center px-4 py-6 block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2 py-lg-2"
                        for="grid--name">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-6 leading-tight focus:outline-none focus:bg-white"
                        type="text" id="email" name="email">

                    @error('email')
                    <p class="text-red-500 text-lg italic">{{$errors->first('email')}}</p>
                    @enderror
                </div>

                <div class=" flex items-center w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                    <label
                        class=" w-64 flex flex-col items-center block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2"
                        for="grid-body">
                        Ask Query
                    </label>
                    <textarea
                        class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-6 leading-tight focus:outline-none focus:bg-white"
                        type="text" id="query" name="textbox"></textarea>

                    @error('body')
                    <p class="text-red-500 text-lg italic">{{$errors->first('textbox')}}</p>
                    @enderror
                </div>
                <div class="flex items-center w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2"
                           for="grid-capacity">
                        Apply for a role at Stadium Tracker
                    </label>
                    <div class="flex items-center pt-6 pb-6 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                        <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-purple">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                            </svg>
                            <span class="mt-2 text-base leading-normal">Upload CV</span>
                            <input type='file' name="file" class="hidden"/>
                        </label>
                    </div>
                </div>
                <button
                    class="  md:w-1/2 shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-2 px-12 "
                    type="submit">
                    Submit
                </button>
            </form>
            <div id="googlemaps" class="w-1/4 px-8 py-10">
                <iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.302209650492!2d-2.293528784157149!3d53.46305888000367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae72d3892d35%3A0xf2c80a77a25a0fe9!2sManchester%20United%20Megastore!5e0!3m2!1sen!2suk!4v1609178436121!5m2!1sen!2suk"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
@endsection
