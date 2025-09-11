<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Xiao Ming'], ['title' => 'About']);
});

// Yang ditambahkan pada video N+1 Problem
// Gunakan with() untuk mengatasi N+1 Problem (Lazy Loading menjadi Eager Loading)
Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    
    $posts = Post::latest()->get(); // Mengambil semua data post terbaru
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function(Post $post){


    return view('post', ['title' => 'Single Post', 'post'=> $post ]);

});

// Menambahkan Lazy Eager Loading pada route author dan category agar meminimalisir query ke database
// Masih bagian dari video N+1 Problem WPU
Route::get('/authors/{user:username}', function(User $user){
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' =>  count($user->posts) . ' Articles by ' . 
    $user->name, 'posts'=> $user->posts]); // count($user->posts) untuk menghitung jumlah post

});

Route::get('/categories/{category:slug}', function(Category $category){
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => ' Articles in: ' . $category->name, 'posts'=> 
    $category->posts]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

