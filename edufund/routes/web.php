<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing', ['title' => 'Home Page']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/startfundraising', function () {
    return view('startfundraising', ['title' => 'Fundraising Page']);
});

Route::get('/aboutus', function () {
    return view('aboutus', ['title' => 'About Us Page']);
});

Route::get('/howitworks', function () {
    return view('howitworks', ['title' => 'How It Works Page']);
});