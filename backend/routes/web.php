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

Route::get('/modal', function () {
    return view('modal/index');
});

route::get('/html/index', 'HtmlController@show')->name('html.show');

route::get('/css/index', 'CssController@show')->name('css.show');

Auth::routes();

Route::get('/management', function () {
    return view('management/index');
});

Route::get('/management/html_word', 'ManagementController@add_html')->name('add.html');
Route::post('/management/html_word', 'ManagementController@insert_html')->name('insert.html');

Route::get('/management/html_list', 'ManagementController@display_htmlList')->name('display.htmlList');

Route::get('/management/edit', 'ManagementController@edit_htmlList')->name('edit.htmlList');
Route::post('/management/edit', 'ManagementController@update_htmlList')->name('update.htmlList');

Route::post('/management/destroy', 'ManagementController@destroy_htmlList')->name('destroy.htmlList');

Route::get('/management/css/index', 'ManagementController@add_css')->name('add.css');
Route::post('/management/css/css_word', 'ManagementController@insert_css')->name('insert.css');

Route::get('/management/css/css_list', 'ManagementController@display_cssList')->name('display.cssList');

Route::get('/management/css/css_edit', 'ManagementController@edit_cssList')->name('edit.cssList');
Route::post('/management/css/css_edit', 'ManagementController@update_cssList')->name('update.cssList');

Route::post('/bookmark/switch', 'BookmarkController@switch');
Route::post('/bookmark/css_switch', 'BookmarkController@css_switch');

Route::middleware(['auth', 'verified'])->group(function () {
    route::get('mypage/index', 'MypageController@index')->name('mypage.show');
    route::get('mypage/bookmark', 'MypageController@bookmarkList')->name('bookmark.words');
    Route::post('/bookmark/like', 'BookmarkController@like')->name('html.like');
    Route::post('/bookmark/css_like', 'BookmarkController@css_like')->name('css.like');
});
Route::get('/management/html_list', 'HomeController@index')->name('search.index');

Route::get('/admin/login', function () {
    return view('adminLogin'); // blade.php
});

Route::post('/admin/login', [\App\Http\Controllers\LoginController::class, 'adminLogin'])->name('admin.login');
