<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'My Contact', 'nama' => 'Farel Hanif Andaru', 'email' => 'farelhanifandaru@gmail.com', 'nohp' => '082233878635']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});