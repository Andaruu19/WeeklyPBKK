<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {    
    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {    
    return view('posts',['title' => count($user->posts) . ' Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {    
    return view('posts',['title' => ' Articles in: ' . $category->name, 'posts' => $category ->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'My Contact', 'nama' => 'Farel Hanif Andaru', 'email' => 'farelhanifandaru@gmail.com', 'nohp' => '082233878635']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
