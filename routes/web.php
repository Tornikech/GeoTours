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

Route::get('/afxazeti', function ()
{
	return view('afxazeti');

});

Route::get('/about', function ()
{
	return view('about');


});

Route::get('/about', 'RegioninfoController@regions');




Route::get('/contact', function ()
{
	return view('contact');

});


Route::get('/contact', 'ContactinfoController@contacts');


Route::get('/samegrelo-Zsvaneti', function ()
{
	return view('samegrelo-Zsvaneti');

});


Route::get('/racha-Qsvaneti', function ()
{
	return view('racha-Qsvaneti');

});


Route::get('/imereti', function ()
{
	return view('imereti');

});



Route::get('/guria', function ()
{
	return view('guria');

});


Route::get('/adjara', function ()
{
	return view('adjara');

});

Route::get('/samcxe-javaxeti', function ()
{
	return view('samcxe-javaxeti');

});

Route::get('/shida-qartli', function ()
{
	return view('shida-qartli');

});



Route::get('/qvemo-qartli', function ()
{
	return view('qvemo-qartli');

});



Route::get('/mcxeta-mtianeti', function ()
{
	return view('mcxeta-mtianeti');

});



Route::get('/kakheti', function ()
{
	return view('kakheti');

});


Route::get('/data', function () {
    return view('insertForm');
});

Route::get('/data', 'controller@getData');

Route::post('/insert','controller@insert');


