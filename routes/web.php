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

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

//一覧を表示
Route::get('/','UsersController@index');

//ユーザー登録
Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

//ログイン機能
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout');

//ゲストログイン
Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

Route::group(['prefix' => 'users/{id}'], function () {
    Route::get('followings', 'UsersController@followings')->name('followings');
    Route::get('followers', 'UsersController@followers')->name('followers');
    });


//ログイン認証後
Route::group(['middleware' => 'auth'], function(){
    Route::put('users', 'UsersController@rename')->name('rename');
    Route::resource('movies', 'MoviesController', ['only' => ['create', 'store', 'destroy']]);
    Route::resource('users', 'UsersController', ['only' => ['show']]);

    Route::group(['prefix' => 'users/{id}'],function(){
        Route::post('follow','UserFollowController@store')->name('follow');
        Route::delete('unfollow','UserFollowController@destroy')->name('unfollow');
    });
});

