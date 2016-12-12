<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('librolibre.welcome');
});

Route::get("/test_pag", function(){
    return "this is a test page;";
});

Route::get('about', 'PagesController@about');

Route::get('terminos_y_condiciones', 'PagesController@toc');

Route::get('login', 'AuthsController@loginn');

// Route::get('bokks', 'BooksController@books');
// Route::get('books/new', 'BooksController@books');
// I have a lot to leran here and don't know what to do