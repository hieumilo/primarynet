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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/ifram1', function(){
    return view('iframeChart/iframeChart1');
});
Route::get('/ifram2', function(){
    return view('iframeChart/iframeChart2');
});
Route::get('/ifram4', function(){
    return view('iframeChart/iframeChart4');
});
Route::get('/ifram5', function(){
    return view('iframeChart/iframeChart5');
});
Route::get('/ifram6', function(){
    return view('iframeChart/iframeChart6');
});
Route::get('/ifram7', function(){
    return view('iframeChart/iframeChart7');
});
Route::get('/ifram8', function(){
    return view('iframeChart/iframeChart8');
});
Route::get('/jstree', 'HomeController@loadjstree');
Route::get('/jstreeload', 'HomeController@controljstree');



//Route::post('/removeEvt', 'HomeController@Remove');

//Route EvtControler
Route::get('/evt', 'EvtlistController@Evtlist');
Route::post('/removeEvt', 'HomeController@Remove');
Route::resource('evtitems', 'EvtlistController');

Route::post('/config', 'HomeController@save');
Route::resource('post', 'PostsController');
Route::get('post/create', function (){
    return view('post.create');
});

Route::get('welcome', function (){
   return view('welcome');
});

