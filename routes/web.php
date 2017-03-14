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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function()
// {
//     return View::make('pages.home');
// });
// Route::get('about', function()
// {
//     return View::make('pages.about');
// });
// Route::get('projects', function()
// {
//     return View::make('pages.project');
// });
// Route::get('contact', function()
// {
//     return View::make('pages.contact');
// });


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::resource('/home', 'Admin\HomeController');


});

