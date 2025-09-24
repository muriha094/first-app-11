<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Xiao Ming',
        'title' => 'About'
    ]);
});

// Route untuk semua posts dengan filter search & category (tanpa pagination)
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::latest()
                       ->filter(request(['search', 'category']))
                       ->get()
    ]);
});

// Route untuk single post (detail post berdasarkan slug)
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post'  => $post
    ]);
});

// Route untuk author (posts berdasarkan user tertentu)
Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts->load('category', 'author')
    ]);
});

// Route untuk category (posts berdasarkan kategori tertentu)
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Articles in: ' . $category->name,
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
