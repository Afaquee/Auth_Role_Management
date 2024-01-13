<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => '/admin'], function() {
    // Route::group(function () {
    //     // Define routes here
    //     Route::get('/users', UserController::class, 'index')->name('users.index');
    // });
    Route::group(['prefix' => '/users'], function () {
        Route::get('/index', [UserController::class, 'index'])->name('users.index');

        // Route::get('/create', 'UserController@create')->name('users.create');
        // Route::post('/', 'UserController@store')->name('users.store');
        // Route::get('/{id}', 'UserController@show')->name('users.show');
        // Route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
        // Route::put('/{id}', 'UserController@update')->name('users.update');
        // Route::delete('/{id}', 'UserController@destroy')->name('users.destroy');
    });
    
    
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class);
});

