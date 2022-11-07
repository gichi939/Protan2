<?php

use Illuminate\Support\Facades\Route;

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
    return view('top/index');
});

route::get('/html/index', 'HtmlController@show')->name('html.show');

route::get('mypage/index', 'MypageController@show')->name('mypage.show');

Auth::routes();

Route::get('/management', function () {
    return view('management/index');
});


Route::get('/management/html_word', 'ManagementController@add_html')->name('add.html');
Route::post('/management/html_word', 'ManagementController@insert_html')->name('insert.html');

Route::get('/management/html_list', 'Managementcontroller@display_htmlList')->name('display.htmlList');

Route::get('/management/edit', 'Managementcontroller@edit_htmlList')->name('edit.htmlList');
Route::post('/management/edit', 'Managementcontroller@update_htmlList')->name('update.htmlList');

Route::get('/management/css', 'ManagementController@add_css')->name('add.css');
Route::post('/management/css', 'ManagementController@insert_css')->name('insert.css');


Route::group(['middleware' => 'auth'], function() {
    Route::post('/bookmark/like', 'BookmarkController@like')->name('html.like');
});
