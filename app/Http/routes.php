<?php

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('home/home');
});*/

Route::group(['middleware' => ['web']], function () {
Route::get('/', 'HomeController@load');

Route::get('home', function () {
	if (Auth::check() && Auth::user()->name == "admin")
	{
    	return view('admin/index');
	}
	else
	{
		return view('home/home');
	}
});


Route::get('admin/editta/id/{id}/nombre/{nombre}/desc/{desc}/precio/{precio}/visitas/{visitas}/dias/{dias}/tiempo/{tiempo}/gtit1/{gtit1}/gref1/{gref1}/gtit2/{gtit2}/gref2/{gref2}/gtit3/{gtit3}/gref3/{gref3}/gtit4/{gtit4}/gref4/{gref4}/gtit5/{gtit5}/gref5/{gref5}/gtit6/{gtit6}/gref6/{gref6}/gtit7/{gtit7}/gref7/{gref7}', function($id, $nombre, $desc, $precio, $visitas, $dias, $tiempo, $gtit1, $gref1, $gtit2, $gref2, $gtit3, $gref3, $gtit4, $gref4, $gtit5, $gref5, $gtit6, $gref6, $gtit7, $gref7) {
	Session::put('id001', $id);
	Session::put('nombre001', $nombre);
	Session::put('descripcion001', $desc);
	Session::put('precio001', $precio);
	Session::put('nvisitas001', $visitas);
	Session::put('dias001', $dias);
	Session::put('tiempovisita001', $tiempo);
	Session::put('gtit1001', $gtit1);
	Session::put('gref1001', $gref1);
	Session::put('gtit2001', $gtit2);
	Session::put('gref2001', $gref2);
	Session::put('gtit3001', $gtit3);
	Session::put('gref3001', $gref3);
	Session::put('gtit4001', $gtit4);
	Session::put('gref4001', $gref4);
	Session::put('gtit5001', $gtit5);
	Session::put('gref5001', $gref5);
	Session::put('gtit6001', $gtit6);
	Session::put('gref6001', $gref6);
	Session::put('gtit7001', $gtit7);
	Session::put('gref7001', $gref7);	

	return redirect('admin/editta');
});

Route::get('admin/editta', function() {
	return view('panel/admin/editta');
});

Route::get('anuncios', 'AnunController@index')->middleware('auth');


Route::get('terminos', function() {
	return view('extras/terminos');
});

Route::get('politica', function() {
	return view('extras/politica');
});



Route::get('tipoanuncio', function() {
	return view('panel/tipoanuncio');
});

Route::get('anuncio/i/{id}', 'AnunController@visanun');

Route::get('cashanuncio', function() {
	return view('panel/anuncio');
});


    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
    Route::get('auth/confirm/email/{email}/confirm_token/{confirm_token}', 'Auth\AuthController@confirmRegister');
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');







/******** User Dashboard ******/
Route::get('dashboard', 'DashboardController@index');
Route::get('dashboard/banners', 'DashboardController@banners');
Route::get('dashboard/user', 'DashboardController@user');
Route::post('dashboard/update','DashboardController@update');
Route::get('dashboard/historial', 'DashboardController@history');
Route::get('dashboard/acceso', 'DashboardController@access');
Route::get('dashboard/announce', 'DashboardController@announce');
Route::get('dashboard/ascend', 'DashboardController@ascend');


/****** Dashboard Admin ****/

/****** User ***/
Route::get('admin/user', [
    'as' => 'admin.user',
    'uses' => 'AdminUserController@index'
]);
Route::get('admin/user/add', [
    'as' => 'admin.user.add',
    'uses' => 'AdminUserController@add'
]);
Route::get('admin/user/edit', [
    'as' => 'admin.user.edit',
    'uses' => 'AdminUserController@edit'
]);

Route::delete('admin/user/{user}/delete', [
    'as' => 'admin.user.delete',
    'uses' => 'AdminUserController@delete'
]);


Route::get('admin/edit/{user}/edit', [
    'as' => 'admin.user.edit',
    'uses' => 'AdminUserController@edit'
]);

/****** Anounces ***/

Route::get('admin/announce', [
    'as' => 'admin.announce',
    'uses' => 'AdminAnnounceController@index'
]);

Route::get('admin/announce/add', [
    'as' => 'admin.announce.add',
    'uses' => 'AdminAnnounceController@add'
]);
Route::post('admin/announce/store', [
    'as' => 'admin.announce.store',
    'uses' => 'AdminAnnounceController@store'
]);
Route::get('admin/announce/edit', [
    'as' => 'admin.announce.edit',
    'uses' => 'AdminAnnounceController@edit'
]);

Route::delete('admin/announce/{announce}/delete', [
    'as' => 'admin.announce.delete',
    'uses' => 'AdminAnnounceController@delete'
]);

});

