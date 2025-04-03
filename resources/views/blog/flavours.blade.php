@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <a href="#flavours-header">
            <h1 id="flavours-header" class="text-3xl font-bold text-center mb-6">Our Cookie Flavours</h1>
        </a>
        <p class="text-center text-gray-600 mb-10">
            We currently produce two ranges: a Bake at Home Dry Cookie Mix and a Bake in Store Cookie Mix. 
            At present, we have 11 flavours in total, 9 of which are available in gluten/wheat free.
            6 of which are linked below.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $flavours = [
                    ['name' => 'Triple Chocolate Chip', 'url' => 'https://kookee.ie/products/triple-chocolate-chip'],
                    ['name' => 'Double Chocolate', 'url' => 'https://kookee.ie/products/double-chocolate-chip'],
                    ['name' => 'Choc a Lot', 'url' => 'https://kookee.ie/products/choc-a-lot-chocolate-chip'],
                    ['name' => 'Coconut and Cranberry', 'url' => 'https://kookee.ie/products/coconut-and-cranberry'],
                    ['name' => 'Spotai', 'url' => 'https://kookee.ie/products/spotai-chocolate-chip'],
                    ['name' => 'Macadamia and Dark Chocolate', 'url' => 'https://kookee.ie/products/oatmeal-and-dark-chocolate-chip']
                ];
            @endphp

            @foreach ($flavours as $flavour)
                <div class="bg-white shadow-md rounded p-4">
                    <img src="{{ asset('images/' . Str::slug($flavour['name']) . '.jpg') }}" alt="{{ $flavour['name'] }}" class="w-full h-40 object-cover rounded mb-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $flavour['name'] }}</h2>
                    <p class="text-gray-600 mb-4">Delicious {{ $flavour['name'] }} cookies, perfect for any occasion!</p>
                    <a href="{{ $flavour['url'] }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Learn More</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection