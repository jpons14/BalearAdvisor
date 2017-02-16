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

# Frontend

Route::get('/', array('uses' => 'Frontend\FrontendController@index', 'as' => 'frontend.home'));
Route::get('/comentaris', array('uses' => 'Frontend\FrontendController@comentaris', 'as' => 'frontend.comentaris'));
Route::get('/restaurants', array('uses' => 'Frontend\FrontendController@restaurants', 'as' => 'frontend.restaurants'));
Route::get('/contact', array('uses' => 'Frontend\FrontendController@contacte', 'as' => 'frontend.contact'));

Route::get('/cifrar', 'LoginController@cifrarContrasenas');
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



Route::get('/backend/index', 'BackendController@index');


Route::post('/user/update/', 'BackendController@userUpdate');



Route::get('/tipuscuina/list', 'BackendController@tipusCuianList');

// Comentaris
Route::get('/backend/comentaris', 'Backend\CommentsController@index');
Route::get('/comment/edit/{id}', 'Backend\CommentsController@edit');
Route::get('/comments/add/form', 'Backend\CommentsController@add');
Route::post('/comments/create', 'Backend\CommentsController@create');
Route::post('/comments/update', 'Backend\CommentsController@update');
Route::get('/comments/delete/{id}', 'Backend\CommentsController@delete');

// Usuaris
Route::get('/backend/users', 'Backend\UsersController@index');
Route::get('/user/edit/{id}', 'Backend\UsersController@edit');
Route::get('/user/create/form', 'Backend\UsersController@usersCreateForm');
Route::post('/user/create', 'Backend\UsersController@create');
Route::get('/user/delete/{id}', 'Backend\UsersController@delete');

// Establiments
Route::get('/backend/establiments', 'Backend\EstablimentsController@index');
Route::get('/establiment/edit/{id}', 'Backend\EstablimentsController@edit');
Route::post('/establiments/update', 'Backend\EstablimentsController@update');
Route::get('/establiments/create', 'Backend\EstablimentsController@create');
Route::post('/establiments/add', 'Backend\EstablimentsController@add');
Route::get('/establiment/delete/{id}', 'Backend\EstablimentsController@delete');

// Tipus cuina
Route::get('/backend/tipuscuina', 'Backend\TipusCuinaController@index');
Route::get('/tipuscuina/edit/{id}', 'Backend\TipusCuinaController@edit');
Route::post('/tipuscuina/update', 'Backend\TipusCuinaController@update');
Route::get('/tipuscuina/delete/{id}', 'Backend\TipusCuinaController@delete');



// Test
Route::get('/slide', function(){
    return view('frontend.slide');
});