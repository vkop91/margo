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

Route::get('/', 'HomeController@index');

Auth::routes();

/**
 * Blog
 */
Route::namespace('Blog')->group(function () {
    Route::resources([
        'posts' => 'PostController'
    ]);
});


Route::get('/adminq/', 'Admin\IndexController@index');

/**
 * Admin
 */
Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'IndexController@index');

    Route::resources([
        'roles' => 'RoleController',
        'posts' => 'PostController',
        'users' => 'UserController'
    ]);
});
