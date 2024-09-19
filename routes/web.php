<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {    
    return view('post',['title' => 'Single Post', 'post' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'My Contact', 'nama' => 'Farel Hanif Andaru', 'email' => 'farelhanifandaru@gmail.com', 'nohp' => '082233878635']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
