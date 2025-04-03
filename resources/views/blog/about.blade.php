@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="background-image grid grid-cols-1 m-auto" style="background-image: url('{{ asset('images/about-hero.jpg') }}'); background-size: cover; background-position: center; height: 500px;">
        <div class="flex">
            <div class="m-auto text-center pt-10 pb-16 sm:m-auto w-4/5">
                <h1 class="text-5xl uppercase font-bold text-yellow-400 text-shadow-md pb-10">
                    About KooKee
                </h1>
                <p class="text-lg font-semibold text-gray-600">
                    Discover the story behind KooKee, where passion for baking meets family tradition.
                </p>
            </div>
        </div>
    </div>

    {{-- The KooKee Story --}}
    <div class="container mx-auto py-10">
        <h2 class="text-4xl font-bold text-center text-yellow pb-10">The KooKee Story</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
            <div>
                <img src="{{ asset('images/about1.png') }}" alt="The KooKee Story" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-gray-600 text-lg mb-4">
                    Pauline's love of baking started from a very early age. Her years working within food manufacturing gave her valuable insight into running a successful artisan bakery. However, her journey took a personal turn when her eldest son was diagnosed with autism. Determined to create a fun and inclusive family activity, Pauline turned to baking as a way to bring her children together.
                </p>
                <p class="text-gray-600 text-lg">
                    What started as a Saturday ritual soon became a passion project. Pauline's cookies became a hit with family and friends, and before long, KooKee was born. Today, KooKee is a thriving business that brings joy to families across Ireland.
                </p>
            </div>
        </div>
    </div>

    {{-- Growing Since '09 --}}
    <div class="bg-yellow-100 py-10">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-yellow pb-10">Growing Since '09</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
                <div class="flex flex-col justify-center">
                    <p class="text-gray-600 text-lg mb-4">
                        Since 2009, KooKee has grown from a small home-based business to a beloved brand. Our products range from freshly baked cookies to frozen uncooked dough for restaurants and deli counters. We also offer easy-to-make retail dry mixes so you can create your own cookies at home.
                    </p>
                    <p class="text-gray-600 text-lg">
                        Every ingredient we use is locally sourced and of the highest quality. We continuously experiment with new recipes to ensure that every cookie delivers a taste sensation. From classic flavors to gluten-free options, there's something for everyone at KooKee.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/about2.png') }}" alt="Growing Since '09" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </div>

    {{-- Our Mission --}}
    <div class="container mx-auto py-10">
        <h2 class="text-4xl font-bold text-center text-yellow pb-10">Our Mission</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
            <div>
                <img src="{{ asset('images/mission.jpg') }}" alt="Our Mission" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-gray-600 text-lg mb-4">
                    At KooKee, our mission is simple: to bring families together through the joy of baking. We believe that baking is more than just a task—it's an experience that creates lasting memories. Whether you're baking with your kids, hosting a party, or simply treating yourself, KooKee is here to make every moment special.
                </p>
                <p class="text-gray-600 text-lg">
                    We are committed to sustainability and supporting local communities. By sourcing our ingredients locally, we ensure that every cookie not only tastes great but also supports Irish farmers and producers.
                </p>
            </div>
        </div>
    </div>

    {{-- Why Choose KooKee --}}
    <div class="bg-yellow-500 text-white py-10">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center pb-10">Why Choose KooKee?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">
                <div>
                    <img src="{{ asset('images/quality.png') }}" alt="Quality Ingredients" class="w-100 h-100 mx-auto mb-4 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-2">Quality Ingredients</h3>
                    <p class="text-lg">
                        We use only the finest, locally sourced ingredients to ensure every cookie is a masterpiece.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/family.png') }}" alt="Family Tradition" class="w-100 h-100 mx-auto mb-4 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-2">Family Tradition</h3>
                    <p class="text-lg">
                        Baking is at the heart of our family, and we want to share that joy with yours.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/innovation.png') }}" alt="Innovative Recipes" class="w-100 h-100 mx-auto mb-4 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-2">Innovative Recipes</h3>
                    <p class="text-lg">
                        From classic flavors to gluten-free options, we’re always creating something new.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection