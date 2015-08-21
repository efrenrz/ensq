<?php

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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::get('/solicitud/{solicitud}', function ($solicitud) {


    $requirements = config('options.required_documents');

    return view('solicitud',compact('requirements'));
});

// Authentication routes...
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);


Route::group(['middleware' => 'auth'], function()
{


    Route::get('/admin/account', function()
    {
        $user = auth()->user();
        return view('admin/account',compact('user'));
    });

    Route::put('admin/account/update/{id}', ['as' => 'update_account', 'uses' => 'UserController@update']);
    Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

    // Admin Users
    Route::group(['middleware' => 'role:admin'], function(){
        Route::get('admin/users', ['as' => 'admin_users', 'uses' => 'UsersController@index']);
        Route::get('admin/users/create',function(){ return view('admin/users/create'); });
        Route::post('admin/users/create',['as' => 'users_create', 'uses' => 'UsersController@store']);
        Route::put('admin/users/update',['as' => 'users_update', 'uses' => 'UsersController@update']);
        Route::get('admin/users/edit/{id}',['as' => 'users_edit', 'uses' => 'UsersController@show']);
    });

    Route::group(['middleware' => 'role:admin'], function () {

    });

});

Route::get('/municipios/{id}','MunicipiosController@municipios');
Route::get('/estados','EstadosController@estados');
Route::get('/estados/id/{curp}','EstadosController@stateId');
