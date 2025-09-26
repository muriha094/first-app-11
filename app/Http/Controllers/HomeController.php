<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post; // ganti "Post" sesuai nama model blog Anda

class HomeController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalBlogs = Post::count();
        $title = 'Home'; // tambahkan ini

        return view('home', compact('totalUsers', 'totalBlogs', 'title'));
    }
}
