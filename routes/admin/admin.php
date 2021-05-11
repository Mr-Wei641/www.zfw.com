<?php
Route::group(['prefix'=>'admin','namespce'=>'Admin'],function(){
    Route::get('login','LoginController@index')->name('admin.login');
    Route::post('login','LoginController@login')->name('admin.login');
});
