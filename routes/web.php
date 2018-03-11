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

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/home', 'HomeController@index')->name('home')->middleware('isVerified');
Route::view('/verificaremail', 'auth.verificaemail');
Route::get('/ifexistsemail', 'VerificaEmailController@verifica');

Route::group(['prefix' => '/Usuarios', 'middleware' => 'auth', 'middleware' => 'isVerified'], function(){
    Route::get('/', 'UserController@index');
    Route::get('/listar-usuarios', 'UserController@listarusers')->name('listarajax');
    Route::get('/abrirmodal', 'UserController@abrirModal');
    Route::get('/cadastrar', 'UserController@store');
});
Route::group(['prefix' => '/ControleAcesso', 'middleware' => 'auth', 'middleware' => 'isVerified'], function(){
    Route::group(['prefix' => '/Roles'], function(){
    Route::get('/', 'RoleController@index');
    });
    Route::group(['prefix' => '/Permissions'], function(){
    Route::get('/', 'PermissionController@index');
    });

    Route::get('/', 'ControleAcessoController@index');
    Route::get('/ListarControleAcesso', 'ControleAcessoController@listar_controle_acesso');
});



