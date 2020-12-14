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

Route::get('/home', function () {
    return view ('home');
    
})->name('home');

Route::get('/produtos', function () {
    return view ('produtos');
    
});
Route::get('/lojas', function () {
    return view ('lojas');
    
});
Route::get('/', 'App\Http\Controllers\LoginController@login');
Route::get('/login', 'App\Http\Controllers\LoginController@login');
Route::post('/logar', 'App\Http\Controllers\LoginController@logar');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');

Route::group(['middleware' => ['login']], function () {
    Route::group(['prefix' => 'oculos'], function () {
        Route::get('/', 'App\Http\Controllers\OculosController@listar')->name('oculos.listar');
        Route::get('/novo', 'App\Http\Controllers\OculosController@novo')->name('oculos.novo');
        Route::post('/salvar', 'App\Http\Controllers\OculosController@salvar')->name('oculos.salvar');
        Route::get('/editar/{id}', 'App\Http\Controllers\OculosController@editar')->name('oculos.editar');
        Route::post('/atualizar/{id}', 'App\Http\Controllers\OculosController@atualizar')->name('oculos.atualizar');
        Route::get('/excluir/{id}', 'App\Http\Controllers\OculosController@excluir')->name('oculos.excluir');
        Route::get('/visualizar/{id}', 'App\Http\Controllers\OculosController@visualizar')->name('oculos.visualizar');

    
});


});