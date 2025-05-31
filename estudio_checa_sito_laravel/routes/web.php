<?php

use App\Models\Cita;
use App\Models\Post;
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

Route::get('/posts', function(){
    $posts = Post::all();

    return view('posts.index', [ 'posts' => $posts ]);
})->name('posts.index');

Route::get('/citas', function(){
    $citas = Cita::all();

    return view('citas.index', [ 
        'citas' => $citas,
        'pageTitle' => 'Citas',
        'metaTitle' => 'Citas del sitio', ]);
})->name('citas.index');