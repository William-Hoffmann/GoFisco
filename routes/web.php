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
Route::get('/home', 'HomeController@index')->name('home');

/* Rotas Padrão */
Route::get('/dashboard/search/ncm', 'HomeController@searchNCM');
Route::get('/dashboard/search/cest', 'HomeController@searchCEST');
Route::get('/dashboard/search/mva', 'HomeController@searchMVA');
Route::get('/dashboard/tools/ajuste', 'HomeController@toolsAJUSTE');
Route::get('/dashboard/tools/calculadora', 'HomeController@toolsCALCULADORA');
Route::get('/dashboard/tools/pautas', 'HomeController@toolsPAUTAS');

/* Rotas Secundárias */
Route::post('/dashboard/search/ncm', 'HomeController@redirecionaNCM')->name('ncm');
Route::post('/dashboard/search/cest', 'HomeController@redirecionaCEST')->name('cest');
Route::post('/dashboard/search/mva', 'HomeController@redirecionaMVA')->name('mva');
Route::post('/dashboard/tools/ajuste', 'HomeController@redirecionaAJUSTE')->name('ajuste');
Route::post('/dashboard/tools/calculadora', 'HomeController@redirecionaCALCULADORA')->name('calculadora');

Route::get('/excel','HomeController@export');

?>
