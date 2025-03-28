@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center text-yellow pb-10">Our Blog</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($posts as $post)
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($post->description, 100) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="bg-yellow text-gray-800 px-4 py-2 rounded-lg shadow-lg hover:bg-yellow-hover transition">Read More</a>
                    
                    <div class="mt-6">
                        <h3 class="text-lg font-bold mb-4">Comments</h3>
                        @forelse ($post->comments as $comment)
                            <div class="mb-4 p-4 bg-gray-100 rounded-lg shadow-md">
                                <p class="text-gray-800">{{ $comment->content }}</p>
                                <p class="text-sm text-gray-500">By {{ $comment->user->name ?? 'Guest' }} on {{ $comment->created_at->format('M d, Y') }}</p>
                            </div>
                        @empty
                            <p class="text-gray-600">No comments yet. Be the first to comment!</p>
                        @endforelse
                    </div>

                    {{-- Add Comment Form --}}
                    @if (auth()->check())
                        <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-6">
                            @csrf
                            <div class="mb-4">
                                <textarea name="content" rows="4" class="w-full px-3 py-2 border rounded-lg" placeholder="Write your comment here..." required></textarea>
                            </div>
                            <button type="submit" class="bg-yellow text-gray-800 px-4 py-2 rounded-lg shadow-lg hover:bg-yellow-hover transition">Submit</button>
                        </form>
                    @else
                        <p class="text-gray-600">Please <a href="{{ route('login') }}" class="text-yellow hover:underline">log in</a> to leave a comment.</p>
                    @endif
                </div>
            @empty
                <p class="text-center text-gray-600">No posts available.</p>
            @endforelse
        </div>
    </div>
@endsection