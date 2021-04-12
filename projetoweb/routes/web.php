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

//use Illuminate\Routing\Route;
//use Illuminate\Support\Facades\Route;

Route::get('/cliente/listar','ClienteController@index')->name('cliente.listar');
Route::get('/cliente/cadastrar','ClienteController@new')->name('cliente.cadastrar');
Route::get('/cliente/cancelar','ClienteController@cancel')->name('cliente.listar');

Route::get('/cliente/alterar/{id}','ClienteController@update')->name('cliente.update');
Route::get('/cliente/excluir/{id}','ClienteController@delete')->name('cliente.delete');
Route::get('/cliente/concultar/{id}','ClienteController@view')->name('cliente.consultar');

Route::post('/cliente/salvar','ClienteController@create')->name('cliente.salvar');
Route::post('/cliente/update/{id}','ClienteController@save')->name('cliente.atualizar');
Route::post('/cliente/excluir/{id}','ClienteController@excluir')->name('cliente.excluir');

Route::any('search_cliente', 'ClienteController@search')->name('search_cliente');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Route::get('/usuario/cadastrar', function () {
    return view('cliente.cadastrar');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario/alterar', function () {
    return view('cliente.alterar');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario/excluir', function () {
    return view('cliente.excluir');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/usuario/consultar', function () {
    return view('cliente.consultar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */