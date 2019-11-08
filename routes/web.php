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
    return view('welcome');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

/*Route::get('/cliente', ['uses'=>'ClienteController@index','as'=>'cliente.index']);*/

Route::get('/cliente', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente.adicionar');
Route::post('/cliente/salvar', 'ClienteController@salvar')->name('cliente.salvar');
Route::get('/cliente/editar/{id}', 'ClienteController@editar')->name('cliente.editar');
Route::put('/cliente/atualizar/{id}', 'ClienteController@atualizar')->name('cliente.atualizar');
Route::get('/cliente/deletar/{id}', 'ClienteController@deletar')->name('cliente.deletar');

Route::get('/cliente/detalhe/{id}', 'ClienteController@detalhe')->name('cliente.detalhe');
Route::get('/telefone/adicionar/{id}', 'TelefoneController@adicionar')->name('telefone.adicionar');
Route::post('/telefone/salvar/{id}', 'TelefoneController@salvar')->name('telefone.salvar');