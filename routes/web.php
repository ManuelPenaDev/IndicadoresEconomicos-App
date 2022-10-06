<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

});
*/

/*   VERIFICAR ORDEN DE LAS RUTAS  */                                                              
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('pagina1');

Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('pagina2');

Auth::routes();

