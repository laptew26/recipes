<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', 'PageController@home')->name('home');

/*Рецепты*/
Route::get('/recipes', 'RecipeController@index')->name('recipe_index');
Route::get('/recipes/{id}', 'RecipeController@show')->name('recipe_show');

/*Пользователи*/
Route::get('/users', 'UserController@index')->name('user_index');
Route::get('/users/{id}', 'UserController@show')->name('user_show');

/*Авторизация/Регистрация*/

Route::group(['middleware' => 'guest'], function(){
    Route::get('/registration', 'AuthController@showRegister')->name('showRegister');
    Route::post('/registration', 'AuthController@doRegister')->name('doRegister');
    Route::get('/login', 'AuthController@showLogin')->name('showLogin');
    Route::post('/login', 'AuthController@doLogin')->name('doLogin');
});

/*Авторизованный пользователь*/
Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/recipes/create', 'RecipeController@create')->name('recipe_create');
    Route::post('/recipes/store', 'RecipeController@store')->name('recipe_store');

    /*Управление рецептами/файлами*/
    Route::group(['middleware' => 'owner'], function (){
        Route::get('/recipes/{id}/edit', 'RecipeController@edit')->name('recipe_edit');
        Route::post('/recipes/{id}/update', 'RecipeController@update')->name('recipe_update');
        Route::get('/recipes/{id}/destroy', 'RecipeController@destroy')->name('recipe_destroy');
    });
});

/*Администратор            Пока что бесполезен */
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'Admin\PageController@index')->name('admin');
    Route::get('/users', 'Admin\UserController@index')->name('admin.user_index');
    Route::get('/recipes', 'Admin\RecipeController@index')->name('admin.recipe_index');
});
