<?php

//vue route
Route::get('{vue?}', function(){
    return view('app');
})->where('vue', '^(?!.*api).*$[\/\w\.-]*');

Route::get('admin/{vue?}', function(){
    return view('admin');
})->where('vue', '^(?!.*api).*$[\/\w\.-]*');

