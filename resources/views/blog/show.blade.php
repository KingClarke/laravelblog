@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        {{-- Blog Post Header --}}
        <div class="text-center">
            <h1 class="text-5xl font-bold text-yellow pb-6">{{ $post->title }}</h1>
            <p class="text-gray-600 text-lg">{{ $post->created_at->format('M d, Y') }} by {{ $post->user->name }}</p>
        </div>

        {{-- Blog Post Image --}}
        <div class="my-10">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full max-w-4xl mx-auto rounded-lg shadow-lg">
        </div>

        {{-- Blog Post Content --}}
        <div class="text-center mx-auto w-4/5">
            <p class="text-gray-800 text-lg leading-relaxed">
                {{ $post->description }}
            </p>
        </div>

        {{-- Comments Section --}}
        <div class="mt-10">
            <h2 class="text-3xl font-bold text-yellow text-center pb-6">Comments</h2>
            @forelse ($post->comments as $comment)
                <div class="bg-gray-100 rounded-lg shadow-md p-4 mb-4 w-4/5 mx-auto">
                    <p class="text-gray-800">{{ $comment->content }}</p>
                    <p class="text-sm text-gray-500 mt-2">By {{ $comment->user->name ?? 'Guest' }} on {{ $comment->created_at->format('M d, Y') }}</p>
                </div>
            @empty
                <p class="text-center text-gray-600">No comments yet. Be the first to comment!</p>
            @endforelse
        </div>

        {{-- Add Comment Form --}}
        @if (auth()->check())
            <div class="mt-10 w-4/5 mx-auto">
                <h3 class="text-2xl font-bold text-yellow pb-4">Leave a Comment</h3>
                <form action="{{ route('comments.store', $post) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                    @csrf
                    <div class="mb-4">
                        <textarea name="content" rows="4" class="w-full px-3 py-2 border rounded-lg" placeholder="Write your comment here..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-yellow text-gray-800 px-4 py-2 rounded-lg shadow-lg hover:bg-yellow-hover transition">Submit</button>
                    </div>
                </form>
            </div>
        @else
            <p class="text-center text-gray-600 mt-10">Please <a href="{{ route('login') }}" class="text-yellow hover:underline">log in</a> to leave a comment.</p>
        @endif
    </div>
@endsection