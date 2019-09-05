<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Admin Controller */
Route::get('/home', [
    'uses'  => 'adminController@index',
    'as'    => 'home'
]);

/*POst*/

Route::get('/post/add-post', [
    'uses'  => 'adminController@addPost',
    'as'    => 'add-post'
]);

Route::post('/post/new-post', [
    'uses'  => 'adminController@newPost',
    'as'    => 'new-post'
]);

Route::get('/post/manage-post', [
    'uses'  => 'adminController@managePost',
    'as'    => 'manage-post'
]);

Route::get('/post/edit-post/{id}', [
    'uses'  => 'adminController@editPost',
    'as'    => 'edit-post'
]);

Route::get('/post/delete-post/{id}', [
    'uses'  => 'adminController@deletePost',
    'as'    => 'delete-post'
]);

Route::post('/post/update-post', [
    'uses'  => 'adminController@updatePost',
    'as'    => 'update-post'
]);

/*/Post*/

/*Image slider*/

Route::get('/slider-image/add-image', [
    'uses'  => 'adminController@addImage',
    'as'    => 'add-image'
]);

Route::post('/slider-image/new-image', [
    'uses'  => 'adminController@newImage',
    'as'    => 'new-image'
]);

Route::get('/slider-image/view-image', [
    'uses'  => 'adminController@viewImage',
    'as'    => 'view-image'
]);

Route::get('/slider-image/delete-image/{id}', [
    'uses'  => 'adminController@deleteImage',
    'as'    => 'delete-image'
]);

/*Featured Video*/

Route::get('/featured-video/add-video', [
    'uses'  => 'adminController@addVideo',
    'as'    => 'add-video'
]);

Route::post('/featured-video/new-video', [
    'uses'  => 'adminController@newVideo',
    'as'    => 'new-video'
]);

Route::get('/featured-video/view-video', [
    'uses'  => 'adminController@viewVideo',
    'as'    => 'view-video'
]);

Route::get('/featured-video/delete-video/{id}', [
    'uses'  => 'adminController@deleteVideo',
    'as'    => 'delete-video'
]);

/*Contact Message*/

Route::post('/contact-message/new-message', [
    'uses'  => 'adminController@newMessage',
    'as'    => 'contact-message'
]);

Route::get('/contact-message/view-message', [
    'uses'  => 'adminController@viewMessage',
    'as'    => 'view-message'
]);

Route::get('/contact-message/delete-message/{id}', [
    'uses'  => 'adminController@deleteMessage',
    'as'    => 'delete-message'
]);

/*/Contact Message*/

/*NewsLetter*/

Route::post('/newsletter', [
    'uses'  => 'adminController@newsletter',
    'as'    => 'newsletter'
]);

Route::get('/newsletter/view-email', [
    'uses'  => 'adminController@viewEmail',
    'as'    => 'view-emails'
]);

Route::get('/newsletter/delete-email/{id}', [
    'uses'  => 'adminController@deleteEmail',
    'as'    => 'delete-email'
]);

/*/NewsLetter*/

/*Reply*/

Route::post('/reply/new-reply', [
    'uses'  => 'adminController@newReply',
    'as'    => 'new-reply'
]);

Route::get('/reply/view-reply', [
    'uses'  => 'adminController@viewReply',
    'as'    => 'view-reply'
]);

Route::get('/reply/delete-reply/{id}', [
    'uses'  => 'adminController@deleteReply',
    'as'    => 'delete-reply'
]);

/*/Reply*/

/*Front Page Route*/

Route::get('/', [
    'uses'  => 'FrontController@index',
    'as'    => '/index'
]);

Route::get('/contact.html', [
    'uses'  => 'FrontController@contact',
    'as'    => 'contact'
]);

Route::get('/blog.html', [
    'uses'  => 'FrontController@blog',
    'as'    => 'blog'
]);

Route::get('/about.html', [
    'uses'  => 'FrontController@about',
    'as'    => 'about'
]);

Route::get('/single.html', [
    'uses'  => 'FrontController@single',
    'as'    => 'single'
]);

Route::get('/typo.html', [
    'uses'  => 'FrontController@typo',
    'as'    => 'typo'
]);





