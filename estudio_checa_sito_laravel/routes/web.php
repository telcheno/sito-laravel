<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index', [
        'pageTitle' => 'Home',
        'metaTitle' => 'Home del sitio',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'pageTitle' => 'About',
        'metaTitle' => 'About del sitio',
    ]);
});
Route::get('/services', function () {
    return view('services', [
        'pageTitle' => 'Services',
        'metaTitle' => 'Services del sitio',
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'pageTitle' => 'Contact',
        'metaTitle' => 'Contact del sitio',
    ]);
});
