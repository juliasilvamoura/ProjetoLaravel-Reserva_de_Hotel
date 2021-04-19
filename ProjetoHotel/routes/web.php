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

use Illuminate\Support\Facades\Route;
//auth()->user();
//use App\User;

Route::get('/cliente/listar','ClienteController@index')->name('cliente.listar');
Route::get('/cliente/cadastrar','ClienteController@new')->name('cliente.cadastrar');
Route::get('/cliente/cancelar','ClienteController@cancel')->name('cliente.listar');

Route::get('/cliente/alterar/{id}','ClienteController@update')->name('cliente.update');
Route::get('/cliente/excluir/{id}','ClienteController@delete')->name('cliente.delete');
Route::get('/cliente/concultar/{id}','ClienteController@view')->name('cliente.consultar');

Route::post('/cliente/salvar','ClienteController@create')->name('cliente.salvar');
Route::post('/cliente/update/{id}','ClienteController@save')->name('cliente.atualizar');
Route::post('/cliente/excluir/{id}','ClienteController@excluir')->name('cliente.excluir');





Route::get('/quarto/listar','QuartoController@index')->name('quarto.listar');
Route::get('/quarto/cadastrar','QuartoController@new')->name('quarto.cadastrar');
Route::get('/quarto/cancelar','QuartoController@cancel')->name('quarto.listar');

Route::get('/quarto/alterar/{id}','QuartoController@update')->name('quarto.update');
Route::get('/quarto/excluir/{id}','QuartoController@delete')->name('quarto.delete');
Route::get('/quarto/concultar/{id}','QuartoController@view')->name('quarto.consultar');

Route::post('/quarto/salvar','QuartoController@create')->name('quarto.salvar');
Route::post('/quarto/update/{id}','QuartoController@save')->name('quarto.atualizar');
Route::post('/quarto/excluir/{id}','QuartoController@excluir')->name('quarto.excluir');





Route::get('/pagamento/listar','PagamentoController@index')->name('pagamento.listar');
Route::get('/pagamento/cadastrar','PagamentoController@new')->name('pagamento.cadastrar');
Route::get('/pagamento/cancelar','PagamentoController@cancel')->name('pagamento.listar');

Route::get('/pagamento/alterar/{id}','PagamentoController@update')->name('pagamento.update');
Route::get('/pagamento/excluir/{id}','PagamentoController@delete')->name('pagamento.delete');
Route::get('/pagamento/concultar/{id}','PagamentoController@view')->name('pagamento.consultar');

Route::post('/pagamento/salvar','PagamentoController@create')->name('pagamento.salvar');
Route::post('/pagamento/update/{id}','PagamentoController@save')->name('pagamento.atualizar');
Route::post('/pagamento/excluir/{id}','PagamentoController@excluir')->name('pagamento.excluir');





Route::get('/reserva/listar','ReservaController@index')->name('reserva.listar');
Route::get('/reserva/cadastrar','ReservaController@new')->name('reserva.cadastrar');
Route::get('/reserva/cancelar','ReservaController@cancel')->name('reserva.listar');

Route::get('/reserva/alterar/{id}','ReservaController@update')->name('reserva.update');
Route::get('/reserva/excluir/{id}','ReservaController@delete')->name('reserva.delete');
Route::get('/reserva/concultar/{id}','ReservaController@view')->name('reserva.consultar');

Route::post('/reserva/salvar','ReservaController@create')->name('reserva.salvar');
Route::post('/reserva/update/{id}','ReservaController@save')->name('reserva.atualizar');
Route::post('/reserva/excluir/{id}','ReservaController@excluir')->name('reserva.excluir');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');