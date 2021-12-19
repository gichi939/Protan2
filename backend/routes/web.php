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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/management', 'ManagementController@display')->name('display_management');

Route::get('/management/html', 'ManagementController@add_html')->name('add.html');
Route::post('/management/html', 'ManagementController@insert_html')->name('insert.html');

Route::get('/management/list/htmlList', 'Managementcontroller@display_htmlList')->name('display.htmlList');
Route::post('/management/list/htmlList', 'Managementcontroller@edit_htmlList')->name('edit.htmlList');

Route::get('/management/css', 'ManagementController@add_css')->name('add.css');
Route::post('/management/css', 'ManagementController@insert_css')->name('insert.css');