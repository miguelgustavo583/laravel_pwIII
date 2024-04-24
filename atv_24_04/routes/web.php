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


Route::get('/', 'PrincipalControllerêprincipal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosControllêrgsobreNos' )->name('site.sobrenos');
Route::get('/contato', 'ContatoControllergcontato')->name( 'site.contato');
Route::post('/contato', 'ContatoControllergcontato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app') ->group(function(){
    Route::get('/clientes', function(){return 'Clientes';}) -> name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index') -> name ('app.fornecedoreza');
    Route::get('/produtos', function(){return 'produtos';}) -> name ('app.produtos');

});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste') -> name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe.<a href="'.route('site.index').'">clique aqui</a>

});