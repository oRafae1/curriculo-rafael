<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/sobre', function (){
    return view('about');
});

Route::get('/resumo', function (){
    return view('resume');
});

Route::get('/servicos', function (){
    return view('services');
});

Route::get('/contato', function (){
    return view('contact');
});
