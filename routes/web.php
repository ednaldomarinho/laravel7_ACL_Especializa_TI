<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'painel'], function(){
    //PainelController

    //PermissionController

    //RoleController

     //PainelController
     Route::get('/', 'Painel\PainelController@index');


});

Auth::routes();

Route::get('/', 'SiteController@index');


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/post/{id}/update', 'HomeController@update')->name('update');
//Route::get('/roles-permissions', 'HomeController@rolesPermissions');