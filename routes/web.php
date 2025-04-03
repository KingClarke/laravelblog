<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    return view('index', compact('posts'));
});

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\PostsController::class, 'about'])->name('about');

Route::get('/blog', [App\Http\Controllers\PostsController::class, 'blog'])->name('blog');

// Route to display the contact form
Route::get('/contact', function () {
    return view('blog.contact');
})->name('contact');

// Route to handle form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');

Route::post('/blog/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/')->with('success', 'You have been logged out.');
})->name('logout');

Route::get('/flavours', function () {
    return view('blog.flavours');
});