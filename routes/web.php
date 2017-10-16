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


/****/
//define('lang',App\Http\Controllers\HomeController::Lang());
app()->singleton('lang', function () {
    return App\Http\Controllers\AdminUserController::changLang();
});
Route::get('/lang/{local}', function ($local) {
    if ($local == 'en') {
        session()->put('lang', 'en');
        Session::put('adminlocale', 'en');
    } else {
        session()->put('lang', 'ar');
        Session::put('adminlocale', 'ar');
        //
    }
    return back();
});
/****/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'AdminUserController@loginForm');
    Route::post('/login', 'AdminUserController@login');
    Route::post('/signup', 'AdminUserController@store');
//    Route::get('/logout', 'AdminUserController@logout');
    Route::get('/forget', 'AdminUserController@forgetForm');
    Route::post('/forget', 'AdminUserController@PostForgetForm');
});
Route::group(['prefix' => 'home', 'middleware' => 'auth:web'], function () {
    Route::get('/logout', 'AdminUserController@logout');
    Route::get('/', 'UserController@index');
    Route::post('/', 'UserController@sendMulti');
    Route::get('/user-data', 'UserController@data');
    Route::get('/message/{id}', 'UserController@message');
    Route::post('/message/{id}', 'UserController@send');
});