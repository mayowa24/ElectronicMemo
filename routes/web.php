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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login/custom', [
    'uses'=>'LoginController@login',
    'as'=>'login.custom'
]);
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', function(){
        return view('home');
    })->name('home');

    Route::get('/admin-home', function(){
        return view('admin-home');
    })->name('admin-home');
});

// Route::get('/admin_inbox', function(){
//     return view('admin_inbox');
// })->name('admin_inbox');

Route::get('/user', function(){
    return view('user');
})->name('user');

Route::get('/comp_message','MessageController@index')->name('comp_message');
Route::get('/comp_message/inbox', 'MessageController@show')->name('inbox');
Route::POST('/comp_message/store','MessageController@store')->name('comp_message.store');
Route::get('/comp_message/{id}/read', 'MessageController@read')->name('read');

Route::get('/user', 'AdminController@user')->name('user');
Route::get('/user/{id}/remove', 'AdminController@remove')->name('remove');
Route::get('/admin_inbox','AdminController@admin_inbox')->name('admin_inbox');
Route::get('/admin_inbox/{id}/delete', 'AdminController@delete')->name('delete');

