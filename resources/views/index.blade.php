@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    At home cookie mixes for all the family!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/Evoke-cookies2.jpeg') }}" width="900" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                About Us
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                KooKee is a home company that's been growing steadaly since' 09. Designed to be simple and easy to include kids in with a variety of flavores and colors.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Our mission is to bring easy to make, bake and partake, cookies to shelves all around Ireland.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h1 class="text-2xl pb-5 text-l"> 
            Where to find Kookee Mixes
        </h1>

        <h2 class="text-2xl pb-5 text-l"> 
            Get your hands on kookee mixes in store at the places shown below. and keep an eye out for new stockists coming soon!
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Supervalue
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Centra
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Musgrave MarketPlace
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Musgrave extendred range
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/Guaranteed-Irish-logo.jpg') }}" width="700" alt="">
        </div>
    </div>
@endsection