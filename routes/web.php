<?php

use Illuminate\Support\Facades\{Route, Auth};


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

/*Route::get('/', function () {
    return view('index');
});
*/



Auth::routes();

Route::post('/createdashboard', 'App\Http\Controllers\Auth\LoginController@createdashboard');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/tablelogin', 'App\Http\Controllers\Auth\LoginController@tablelogin');
Route::get('/userprofile', 'App\Http\Controllers\Auth\LoginController@userprofile');

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::post('/create', 'App\Http\Controllers\PagesController@create');
Route::post('/createupdate', 'App\Http\Controllers\PagesController@createupdate');
Route::post('/createpr', 'App\Http\Controllers\PagesController@createpr');
Route::post('/', 'App\Http\Controllers\PagesController@update');
Route::post('/update_p', 'App\Http\Controllers\PagesController@update_p');
Route::post('/delete', 'App\Http\Controllers\PagesController@destroy');
Route::post('/delete_p', 'App\Http\Controllers\PagesController@destroy_p');
Route::post('/success', 'App\Http\Controllers\PagesController@success');
Route::post('/successmisi', 'App\Http\Controllers\PagesController@successmisi');
Route::get('/demage', 'App\Http\Controllers\PagesController@demage');
Route::get('/viar', 'App\Http\Controllers\PagesController@viar');
Route::get('/modal', 'App\Http\Controllers\PagesController@viarubah');
Route::get('/repair', 'App\Http\Controllers\PagesController@repair');
Route::get('/table', 'App\Http\Controllers\PagesController@table');
Route::get('/report', 'App\Http\Controllers\PagesController@report');
Route::get('/user', 'App\Http\Controllers\PagesController@user');
Route::get('/management', 'App\Http\Controllers\PagesController@management');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
