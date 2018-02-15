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
//=========================================
// Materi Routing
//=========================================
Route::get('/', function () {
    return view('welcome');
});

Route::get('hadi', function (){
	return view('L1_routing.hadi');
});

Route::get('welcome', function(){
	return view('welcome');
});

Route::post('hadi_kirim', function(){
	return view('L1_routing.hadi_kirim');
});

//=========================================
// Materi Blade Templating
//=========================================
Route::get('tmp', function(){
	return view('child');
});

Route::get('input', function(){
	return view('input');
});

//=========================================
//Latihan Materi Blade Templating
//=========================================
Route::get('hadihome', function(){
	return view('L2_bladeTemplating.childHadiHome');
});

Route::get('hadi01', function(){
	return view('L2_bladeTemplating.childHadi1');
});

Route::post('action', 'ControllerHadi1@informasi');

Route::get('hadi01terima', function(){
	return view('childhadi1terima');
});

Route::get('hadi02', function(){
	return view('L2_bladeTemplating.childHadi2');
});

// Route::get('hadi03', function(){
// 	return view('L2_bladeTemplating.childHadi3');
// });

Route::get('hadi03', 'ControllerHadi3@informasi');

//===============================================
// Route::get('contact', 'ControllerContact@mycontact');

Route::get('contact', 'ControllerContact@hasil');

//===============================================

// Route::get('database', 'ControllerSapa@index');
Route::get('database', function(){
	return view('sapa.index');
});

Route::get('latihanHadiKirim', function(){
	return view('hadikirim');
});

Route::post('latihanHadiTerima', function(){
	return view('haditerima');
});
