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

Auth::routes();

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [ 'as' => 'welcome.index', 'uses' => 'WelcomeController@index']);

Route::get('/home', 'HomeController@index');

Route::resource('/empresa', 'Site\EmpresaController');

Route::resource('/produtos', 'Site\ProdutosController');

Route::resource('/fibra', 'Site\FibraController');
Route::post('/fibra/enviar', [ 'as' => 'fibra.send', 'uses' => 'Site\FibraController@send']);

Route::resource('/ouvidoria', 'Site\OuvidoriaController');

Route::resource('/suporte', 'Site\SuporteController');
Route::post('/suporte/index/enviar', [ 'as' => 'suporte.sendWelcome', 'uses' => 'Site\SuporteController@sendWelcome']);

Route::resource('/contato', 'Site\ContatoController');
Route::post('/contato/index/enviar', [ 'as' => 'contato.sendWelcome', 'uses' => 'Site\ContatoController@sendWelcome']);
Route::post('/contato/enviar', [ 'as' => 'contato.send', 'uses' => 'Site\ContatoController@send']);


Route::get('get-cidades/{idEstado}', 'WelcomeController@getCidades');
Route::get('get-cidades/{idEstado}/{idCidade}', 'WelcomeController@getPlanos');
