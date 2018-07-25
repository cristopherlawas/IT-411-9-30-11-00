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
})->name('index');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/foo', function(){
	return view('foo');
})->name('foo');

Route::get('/bar', function(){
	return view('bar');
})->name('bar');

Route::get('/shoutout/{text}', function($text){

	
	return view('shoutout',
		   array (
		'text'=> $text, 
		'colors'=> $colors));

})->name('shoutout');



Route::get('/basic-arithmetic/{op?}/{n1?}/{n2?}', function($op=null,$n1=null,$n2=null){

	
	return view('basic-arithmetic',
		   array (
					'op'=> $op, 
					'n1'=> $n1,
					'n2'=> $n2
				));
})->name('basic-arithmetic');