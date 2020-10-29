<x-back-button />

<form class=" w-full max-w-lg">



        <div class=" flex items-center  pt-10 pb-12 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
            <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid--name">
                Stadium Name
            </label>

            <input class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="name" id="name" value="{{old('name') ?? $stadium->name ?? ''}}">

            @error('name')
            <p class="text-red-500 text-lg italic">{{$errors->first('name')}}</p>
            @enderror

        </div>



        <div class="flex items-center pt-10 pb-12 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
            <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-capacity">
                Stadium Capacity
            </label>

            <input class="appearance-none block w-9/12 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" max="130000"  name="capacity" id="capacity" value="{{old('capacity') ?? $stadium->capacity ?? ''}}">

            @error('capacity')
            <p class="text-red-500 text-lg italic">{{$errors->first('capacity')}}</p>
            @enderror

        </div>


        <div class="  pt-10 pb-12 w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
            <label class="  block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-body">
                Stadium Information
            </label>

            <textarea class="appearance-none block w-full  bg-gray-200 text-gray-700 border border-red-500 rounded py-10 px-16 mb-12  focus:outline-none focus:bg-white"  name="body" id="body"> {{old('body') ?? $stadium->body ?? ''}}</textarea>

            @error('body')
            <p class="text-red-500 text-lg italic">{{$errors->first('body')}}</p>
            @enderror

        </div>


    <button class="  md:w-1/2 shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-xl font-bold py-2 px-12 " type="submit">
        Submit
    </button>
</form>
