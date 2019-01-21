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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function()
{
    return "<h1>Primeira loo�gica com Laravel</h1>";
});



//http://localhost:8000/outra
Route::get('/outra', function()
{
    return "<h1>outra rota</h1>";
});


//@lista � o m�todo que ser� executado em ProdutoController
Route::get('/produtos', 'ProdutoController@lista');

//Route::get('/produtos/mostra', 'ProdutoController@mostra');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

//Route::get('/produtos/adiciona', 'ProdutoController@adiciona');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');