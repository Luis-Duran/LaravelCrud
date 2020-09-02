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

Route::get('/', function () {
    return view('welcome');
})->name('Welcome');

Route::get('index', 'UserController@index');
Route::get('users', 'UserController@store')->name('users.store');
Route::get('users/{user}', 'UserController@destroy')->name('users.destroy');



Route::resource('products','ProductsController');



Route::get('Example',function(){
    return view('Example');
})->name('Example');

Route::get('Plantilla',function(){
    return view('Plantilla');
})->name('Plantilla');

Route::get('Data',function($names = null){
    $names=['Carlos','Herculano','Diomedes'];
    return view('Data', Compact('names'));
})->name('Data');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
