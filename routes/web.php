<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\PostsController::class, 'about'])->name('about');

Route::get('/blog', [App\Http\Controllers\PostsController::class, 'blog'])->name('blog');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');

Route::post('/blog/{post}/comments', [CommentController::class, 'store'])->name('comments.store');