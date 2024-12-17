<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return "Mostrara el formulario";
    }
    public function show($post)
    {
        return "estas son las rutas post $post";
    }
}
