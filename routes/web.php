<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('login');
});
Route::get('/index', [HomeController::class, 'index']);
Route::get('/granja', [HomeController::class, 'granja']);
//Route::get('/index', [HomeController::class, 'granja']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post', [PostController::class, 'create']);
Route::get('/post/{post}',[PostController::class, 'show']);

Route::get('/login', function(){
    return "login";
});

Route::get('/componente1', function(){
    return "componente1";
});

Route::get('/granjas', function(){
    return "Granjas";
});

Route::get('/granja1', function(){
    return "granja1";
});

Route::get('/granjainfo', function(){
    return "granjainfo";
});

Route::get('/tareas', function(){
    return "tareas";
});

Route::get('/newgranja', function(){
    return "newgranja";
});

Route::get('/colaboladores', function(){
    return "colaboladores";
});

Route::get('/newcolaborador', function(){
    return "new colaborador";
});

Route::get('/graficas', function(){
    return "graficas";
});

//para generar rutas variables
//Route::get('/post/{post}', function($post){
//    return "estas son las rutas post $post";
//});

//para generar multiples rutas variables
//Route::get('/post/{post}/{categoria}', function($post,$categoria){
//    return "estas son las rutas post $post de la categoria $categoria ";
//});

//para generar multiples rutas variables pero obcional
Route::get('/post/{post}/{categoria?}', function($post,$categoria = null){
    if ($categoria){
        return "estas son las rutas post $post de la categoria $categoria ";
    }
    return "estas son las rutas post $post";
});
