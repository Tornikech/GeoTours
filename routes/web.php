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

Route::get('/regions/{id}', 'RegioninfoController@regions');

Route::get('/about', function ()
{
	return view('about');


});
// es route aris bazashi rom miwvde columns
Route::get('/about/{id}', 'RegioninfoController@regions');  




Route::get('/contact', function ()
{
	return view('contact');

});


Route::get('/contact', 'ContactinfoController@contacts');




Route::get('/data', function () {
    return view('insertForm');
});

Route::get('/data', 'controller@getData');

Route::post('/insert','controller@insert');

Route::get('/auth','Adminauth\AuthController@showLoginForm');
Route::post('/login','Adminauth\AuthController@login');


Route::group(['middleware'=>['admin']], function()
	{
		Route::get('/dashboard', 'Admin\AdminController@dashboard');
		Route::get('/logout', 'AdminController@logout');
	});


Route::get('admin', 'Controller@getData');


Route::post('/insert', 'Controller@insert');


Route::post('/insert','Controller@insert');

Auth::routes();

Route::get('/home', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
