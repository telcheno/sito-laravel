<?php

use App\Models\Cita;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/citas', function(){ // route para mostrar todas las citas
    $citas = Cita::all(); // obtenemos todas las citas de la base de datos
    // pasamos las citas a la vista

    return view('citas.index', [ // endpoint para mostrar todas las citas
        'citas' => $citas, // pasamos las $citas a la vista
        'pageTitle' => 'Citas', // título de la página
        'metaTitle' => 'Citas del sitio', ]); // meta título de la página
})->name('citas.index'); // nombre de la ruta para las citas

Route::get('/citas/create', function(){ // route para mostrar el formulario de creación de citas
    return view('citas.create', [ // endpoint para mostrar el formulario de creación de citas
        'pageTitle' => 'Crear Cita', // título de la página
        'metaTitle' => 'Crear Cita del sitio', // meta título de la página
    ]);
})->name('citas.create'); // nombre de la ruta para crear citas

Route::post('/citas', function(Request $request){ // route para almacenar una nueva cita
    // Validación de los datos recibidos
    Cita::create($request->only(['fecha', 'hora', 'estado']));// creamos una nueva cita con los datos recibidos 
    return redirect()->route('citas.index'); // redirigimos a la lista de citas
})->name('citas.store'); // nombre de la ruta para almacenar citas

Route::get('/citas/{cita}/edit', function(Cita $cita){ // route para mostrar el formulario de edición de una cita específica
    // Obtenemos la cita específica por su ID
    // y la pasamos a la vista de edición
    return view('citas.edit', compact('cita'), [ // endpoint para mostrar el formulario de edición de citas
        'pageTitle' => 'Editar Cita', // título de la página
        'metaTitle' => 'Editar Cita del sitio',// meta título de la página
    ]);
})->name('citas.edit'); // nombre de la ruta para editar citas

Route::delete('/citas/{cita}', function(App\Models\Cita $cita){ // route para eliminar una cita específica
    $cita->delete(); // eliminamos la cita específica por su ID
    // y redirigimos a la lista de citas
    return redirect()->route('citas.index'); // redirigimos a la lista de citas
})->name('citas.destroy'); // nombre de la ruta para eliminar citas

Route::put('/citas/{cita}', function(Request $request, Cita $cita){ // route para actualizar una cita específica
    $cita->update($request->only(['fecha', 'hora', 'estado'])); // actualizamos la cita específica con los datos recibidos
    return redirect()->route('citas.index',); // redirigimos a la lista de citas
})->name('citas.update'); // nombre de la ruta para actualizar citas