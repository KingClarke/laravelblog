@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-6">Blog</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($posts as $post)
                <div class="bg-white shadow-md rounded p-4">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-40 object-cover rounded mb-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 100) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Read More</a>
                </div>
            @empty
                <p class="text-center text-gray-600">No posts available.</p>
            @endforelse
        </div>
    </div>
@endsection