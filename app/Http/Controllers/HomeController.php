<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
        Funcion index retorna vista posts que es la que tenemos como página inicial.
        La función poost retorna la vista post que es una página con contenido dentro de todo el sitio web.
    */
    public function index()
    {
        //return view('home');
        return view('posts');
    }
    public function post()
    {
        //return view('home');
        return view('post');
    }
}