@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    At-home Cookie Mixes for All the Family!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-yellow-400 text-gray-800 py-3 px-6 font-bold text-xl uppercase rounded-full shadow-lg hover:bg-yellow-500 transition duration-300">
                    Read More
                </a>
            </div>
        </div>
    </div>

    {{-- About Us Section --}}
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/Evoke-cookies2.jpeg') }}" width="1200" alt="Delicious Cookies" class="rounded-lg shadow-lg">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-yellow-600">
                About Us
            </h2>
            
            <p class="py-8 text-gray-600 text-lg">
                KooKee is a home company that's been growing steadily since '09. Designed to be simple and easy to include kids in with a variety of flavors and colors.
            </p>

            <p class="font-extrabold text-gray-700 text-lg pb-9">
                Our mission is to bring easy-to-make, bake, and partake cookies to shelves all around Ireland.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-yellow-400 text-gray-800 text-lg font-extrabold py-3 px-8 rounded-full shadow-lg hover:bg-yellow-500 transition duration-300">
                Find Out More
            </a>
        </div>
    </div>

    {{-- Stockists Section --}}
    <div class="text-center p-15 bg-yellow-500 text-white">
        <h1 class="text-4xl pb-5 font-bold"> 
            Where to Find KooKee Mixes
        </h1>

        <h2 class="text-2xl pb-5 font-semibold"> 
            Get your hands on KooKee mixes in-store at the places shown below.
            And keep an eye out for new stockists coming soon!
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-lg font-extrabold">
            <div>
                <span class="block py-2 bg-yellow-600 rounded-lg shadow-md">Supervalue</span>
                <img src="{{ asset('images/supervalue-logo.jpg') }}" alt="Supervalue Logo" class="w-200 h-200 mx-auto mt-2 rounded-lg shadow-md">
            </div>
            <div>
                <span class="block py-2 bg-yellow-600 rounded-lg shadow-md">Centra</span>
                <img src="{{ asset('images/centra-logo.jpg') }}" alt="Centra Logo" class="w-200 h-200 mx-auto mt-2 rounded-lg shadow-md">
            </div>
            <div>
                <span class="block py-2 bg-yellow-600 rounded-lg shadow-md">Musgrave MarketPlace</span>
                <img src="{{ asset('images/musgrave-marketplace-logo.jpg') }}" alt="Musgrave MarketPlace Logo" class="w-200 h-200 mx-auto mt-2 rounded-lg shadow-md">
            </div>
            <div>
                <span class="block py-2 bg-yellow-600 rounded-lg shadow-md">Musgrave Extended Range</span>
                <img src="{{ asset('images/musgrave-extended-logo.jpg') }}" alt="Musgrave Extended Range Logo" class="w-200 h-200 mx-auto mt-2 rounded-lg shadow-md">
            </div>
        </div>
    </div>

    {{-- Blog Section --}}
    <div class="text-center py-15">
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-600 text-lg pb-10">
            Discover the latest updates, recipes, and tips from KooKee. Stay inspired and bake with love!
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 w-4/5 m-auto">
            @forelse ($posts as $post)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 100) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="bg-yellow-400 text-gray-800 px-4 py-2 rounded-lg shadow-lg hover:bg-yellow-500 transition">
                        Keep Reading
                    </a>
                </div>
            @empty
                <p class="text-center text-gray-600">No recent posts available.</p>
            @endforelse
        </div>
    </div>

    {{-- Featured Blog Section --}}
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-400 text-gray-800 pt-10 rounded-lg shadow-lg">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-sm font-bold">
                    PHP
                </span>

                <h3 class="text-2xl font-bold py-10">
                    All our products are Guaranteed Irish, and we are proud to be a part of the community.
                    Some are award-winning with related stickers on the packaging, all are made with love.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-800 text-gray-800 text-sm font-extrabold py-3 px-5 rounded-full hover:bg-gray-800 hover:text-white transition duration-300">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/Guaranteed-Irish-logo.jpg') }}" width="1200" alt="Guaranteed Irish Logo" class="rounded-lg shadow-lg">
        </div>
    </div>
@endsection