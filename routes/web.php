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

Auth::routes();


Route::middleware('role:author')->get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');
//Admin
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
Route::group(['middleware' => 'auth'], function () {

    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');
});

Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/{slug_category}', 'WelcomeController@cdetail')->name('cdetail');
Route::get('/{slug_category}/{slug}', 'WelcomeController@detail')->name('detail');