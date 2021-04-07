<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Auth::routes();
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');


Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('/article/create', 'ArticleController@store')->name('article.store');
Route::get('/article', 'ArticleController@index')->name('article.index');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('/article/create', 'ArticleController@store')->name('article.store');
Route::get('/article/{id}', 'ArticleController@show')->name('article.show');
Route::get('/article/{id}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('/article/{id}/edit', 'ArticleController@update')->name('article.update');
Route::delete('/article/{id}/delete', 'ArticleController@destroy')->name('article.destroy');

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/create', 'CategoryController@store')->name('category.store');
Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/category/{id}/edit', 'CategoryController@update')->name('category.update');
Route::delete('/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');

Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('change-password', 'ChangePasswordController@index')->name('change.password.index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::group(['middleware' => ['auth', 'role:admin']], function() {

    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users/store', 'UserController@store')->name('users.store');
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users/create', 'UserController@store')->name('users.store');
    Route::get('/users/{id}', 'UserController@show')->name('users.show');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::patch('/users/{id}/edit', 'UserController@update')->name('users.update');
    Route::delete('/users/{id}/delete', 'UserController@destroy')->name('users.destroy');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');
});


Route::get('/{slug_category}', 'WelcomeController@cdetail')->name('cdetail');
Route::get('/{slug_category}/{slug}', 'WelcomeController@detail')->name('detail');