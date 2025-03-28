@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-6">Contact Us</h1>
        <form action="{{ route('contact.submit') }}" method="POST" class="w-full max-w-lg mx-auto bg-white p-8 shadow-md rounded">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded" placeholder="Your Name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" placeholder="Your Email" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border rounded" placeholder="Your Phone Number" required>
            </div>
            <div class="mb-4">
                <label for="comment" class="block text-gray-700 font-bold mb-2">Comment</label>
                <textarea id="comment" name="comment" rows="4" class="w-full px-3 py-2 border rounded" placeholder="Your Comment" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Send</button>
            </div>
        </form>
    </div>
@endsection