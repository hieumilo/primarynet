<?php

//vue route
Route::get('{vue?}', function(){
    return view('app');
})->where('vue', '^(?!.*api).*$[\/\w\.-]*');

Route::get('admin/{vue?}', function(){
    return view('admin');
})->where('vue', '^(?!.*api).*$[\/\w\.-]*');

<<<<<<< HEAD
=======
//lang setting
Route::get('/{lang?}','LanguageController@index');
Route::get('/{lang?}/login','LanguageController@login');
Route::get('/{lang?}/register','LanguageController@register');

>>>>>>> 1c889c83377b2b49e4ba1f001a837970836eb8cd
