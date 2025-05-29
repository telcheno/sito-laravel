<?php

use Illuminate\Support\Facades\Route;
use App\Models\Citas;

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
Route::get('/citas', function () {
    // return view('citas', [
    //     'pageTitle' => 'Citas',
    //     'metaTitle' => 'Citas del sitio',
    // ]);
    $citas = Citas::all();

    return view('citas.index', [
        'pageTitle' => 'Citas',
        'metaTitle' => 'Citas del sitio',
        'citas' => $citas,
    ]);
})->name('citas.index');

Route::get('/citas/create', function () {
    $citas = Citas::create([
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return view('citas.create', [
        'pageTitle' => 'Crear Cita',
        'metaTitle' => 'Crear Cita del sitio',
        'citas' => $citas,
    ]);
})->name('citas.create'); ;