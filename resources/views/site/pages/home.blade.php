@extends('site.layouts.default')

@section('content')

    <header class="relative  " style="min-height: 70vh">
        <div class="hero-bg absolute w-full h-full top-0 z-0 bg-purple-500">
        </div>
        <div class="hero-content flex justify-center items-center z-10 w-full h-full absolute ">
            <div class="w-1/2">
                <div class="hero-title  text-white text-5xl font-bold">Buy Photos & Videos clicked by Professionals</div>
                <div class="search mt-4 w-full">
                    <input type="text" name="" class="w-full py-4 px-6 rounded-md bg-white" placeholder="Search Photos, Videos, Audios" id="">
                </div>                    
            </div>
        </div>
    </header>


    <section class="photo-lists">
        <div class="container mx-auto">
            <h3 class="text-md  text-center font-medium text-gray-500 pt-4 ">
                <span class="pb-3 border-b-2 rounded-sm border-purple-500">Featured Photos</span>
            </h3>
            <div class="photo-columns flex">
                <ul class="image-lists px-2 pt-12 w-1/3">
                    @foreach($photos as $photo)
                    <li class="long p-2">
                        <a href="/photo/{{ $photo->idx }}">
                        <img class="w-full object-cover" src="{{ asset('storage/' . $photo->file_path) }}" alt="" /> 
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>


        </div>

    </section>
   
@endsection