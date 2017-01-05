<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('frontend/index');
});

# Login

Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@login');

# End Login


Route::get('/comentaris', 'CommentController@index');

Route::get('/see/comentaris', 'SeeController@comentaris');

Route::get('/import/comentaris', 'ImportController@comentaris');

Route::get('/import/usuaris', 'ImportController@usuaris');

Route::get('/import/tipusCuina', 'ImportController@tipusCuina');

Route::get('/import/establiments', 'ImportController@establiments');

Route::get('/contact', array('uses' => 'FrontendController@contactShow', 'as' => 'frontend.contact'));

Route::get('/comment/edit/{id}', 'BackendController@commentsEdit');

Route::get('/backend/index', 'BackendController@index');

Route::get('/backend/users', 'BackendController@usersList');

Route::get('/backend/comentaris', 'BackendController@comentarisList');

Route::get('/user/edit/{id}', 'BackendController@userEdit');
Route::post('/user/update/', 'BackendController@userUpdate');
Route::post('/comments/update/', 'BackendController@commentUpdate');
Route::get('test', function(){
    return view('test');
});