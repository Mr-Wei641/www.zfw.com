<?php
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('login','LoginController@index')->name('admin.login');
    Route::post('login','LoginController@login')->name('admin.login');

    Route::group(['middleware'=>['ckadmin']],function(){
        Route::get('index','IndexController@index')->name('admin.index');
        Route::get('welcome','IndexController@welcome')->name('admin.welcome');

        Route::get('logout','IndexController@logout')->name('admin.logout');

        Route::get('user/index','UserController@index')->name('admin.user.index');
    });
});
