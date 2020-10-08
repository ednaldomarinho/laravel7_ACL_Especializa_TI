<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'painel'], function(){
    //PostController
    Route::get('posts', 'Painel\PostController@index');
    //PermissionController
    Route::get('permissions', 'Painel\PermissionController@index');
    //RoleController
    Route::get('roles', 'Painel\RoleController@index');
    Route::get('role/{id}/permissions', 'Painel\RoleController@permissions');
    //UserController
    Route::get('users', 'Painel\UserController@index');
     //PainelController
     Route::get('/', 'Painel\PainelController@index');


});

Auth::routes();

Route::get('/', 'Portal\SiteController@index');


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/post/{id}/update', 'HomeController@update')->name('update');
//Route::get('/roles-permissions', 'HomeController@rolesPermissions');