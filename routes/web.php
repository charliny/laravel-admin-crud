<?php

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
*/

Route::get('/', function () {
    return view("home");
})->name('home');

Route::get('/individuo/cadastrar', 'IndividuoController@telaCadastro')->name('cadastramento');
Route::get('/individuo/alterar/{id}', 'IndividuoController@telaAlteracao')->name('usuario_update');

Route::post('/individuo/adicionar', 'IndividuoController@adicionar')->name('adicionar_usuario');
Route::post('/individuo/alterar/{id}', 'IndividuoController@alterar')->name('usuario_alterar');

Route::get('/individuo/listar', 'IndividuoController@listar')->name('listar_usuarios');

Route::get('/individuo/excluir/{id}', 'IndividuoController@excluir')->name('usuario_delete');



Route::get('/vender', 'AppController@telaVenda')->name('vender');
Route::post('/vendendo', 'AppController@realizarVenda')->name('realizar_venda');

Route::get('/vendas/historico', 'AppController@historico')->name('historico');