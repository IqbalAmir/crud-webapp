<div class=" container mx-auto flex items-center flex-wrap pt-10 pb-12">
    @if(!$stadiums->isEmpty())
        @foreach ($stadiums as $stadium)
            <div class=" -full md:w-1/3 xl:w-2/4 p-12 flex flex-col">
                <div class="flex">
                    <div class="mr-4">
                        <a><img class="shadow sm:w-12 sm:h-12 w-14 h-14 rounded-full"
                                src="{{$stadium->user->avatar_url}}" alt="Avatar"> </a>
                    </div>
                    <div>
                        <h1 class="text-xl font-medium text-red-500">{{$stadium->name}}</h1>
                        <p class="text-black-500"> Review by {{$stadium->user->name}}</p>
                    </div>
                </div>
                <button
                    class="mt-3 bg-gray-700 hover:text-purple-400 text-red-500 rounded-full px-3 py-2 shadow-xl focus:outline-none">
                    <a href="{{$stadium->path()}}">Show Stadium Details </a>
                </button>
            </div>
        @endforeach
    @else
        <h1 class="text-red-500 text-2xl text-lg-center py-6 ">No Stadiums Found</h1>
    @endif
</div>

