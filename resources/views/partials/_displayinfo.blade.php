<!DOCTYPE html>
<html lang="en">
<head>



</head>

<body class="bg-gray-400 font-sans leading-normal tracking-normal">



<div class="container mx-auto flex flex-col md:flex-row items-center my-6 md:my-12">
    <!--Left Col-->
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
        <h1 class="font-bold text-red-600 text-6xl my-2 ">{{$stadium->name}}</h1>
        <h1 class="font-weight-normal text-red-600 text-3xl my-4 pt-12"> Capacity of {{$stadium->capacity}} </h1>
        <p class="font-italic text-red-600 text-2xl mb-8 pt-12">{{$stadium->body}}</p>

    </div>
    <!--Right Col-->
    <div class="w-full lg:w-1/2 lg:py-6 text-center">
        <img src="/images/stadium.jpeg" alt="">

    </div>

</div>




</body>
</html>
