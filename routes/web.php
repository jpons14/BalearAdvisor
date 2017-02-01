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

Route::get('/logout', 'LoginController@logout');

# End Login


Route::get('/comentaris', 'CommentController@index');

Route::get('/see/comentaris', 'SeeController@comentaris');

Route::get('/import/comentaris', 'ImportController@comentaris');

Route::get('/import/usuaris', 'ImportController@usuaris');

Route::get('/import/tipusCuina', 'ImportController@tipusCuina');
//
Route::get('/import/establiments', 'ImportController@establiments');

Route::get('/contact', array('uses' => 'FrontendController@contactShow', 'as' => 'frontend.contact'));


Route::get('/backend/index', 'BackendController@index');

Route::get('/backend/establiments', 'BackendController@establimentsList');

Route::post('/user/update/', 'BackendController@userUpdate');

Route::get('/establiment/edit/{id}', 'BackendController@establimentEdit');
Route::post('/establiments/update', 'BackendController@establimentUpdate');

Route::get('/tipuscuina/list', 'BackendController@tipusCuianList');

// Comentaris
Route::get('/backend/comentaris', 'Backend\CommentsController@index');
Route::get('/comment/edit/{id}', 'Backend\CommentsController@edit');
Route::get('/comments/add/form', 'Backend\CommentsController@add');
Route::post('/comments/create', 'Backend\CommentsController@create');
Route::post('/comments/update', 'Backend\CommentsController@update');

// usuaris
Route::get('/backend/users', 'Backend\UsersController@index');
Route::get('/user/edit/{id}', 'Backend\UsersController@edit');
Route::get('/user/create/form', 'Backend\UsersController@usersCreateForm');
Route::post('/user/create', 'Backend\UsersController@create');