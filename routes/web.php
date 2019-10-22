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

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('admin')->group(function () {
    Route::resource('/categories', 'CategoryController');
    Route::resource('/posts', 'PostController');
    Route:: delete('/commentsdelete/{id}', 'CommentController@destroy')->name('commentsdelete');
    Route::get('/comments', 'CommentController@index')->name('comments');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/comment', 'CommentController@create')->name('comm');

Route::post('/save_comment/{id}', 'Front@store')->name('save_comm');


Route::get('/first_page', 'Front@index')->name('front');

Route::get('/content/{id}', 'Front@showContent')->name('content');

Route::get('/form', 'FormController@index');

Route::post('/formStore', 'FormController@store')->name('storeEmail');






