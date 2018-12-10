<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
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

Route::get('/', 'PagesController@index');
Route::get('/projects', 'ProjectController@index')->name('projects');

Route::get('/about', 'PagesController@about');
Route::get('/loadmore', 'ProjectController@loadmore');
Route::get('/filteredprojects', 'ProjectController@filter');

Route::get('/solutions', 'PagesController@solutions');
Route::get('/services', 'PagesController@services');
Route::get('/company', 'PagesController@company');
Route::get('/contact', 'PagesController@contact');
Route::get('/policy', 'PagesController@policy');
Route::get('/terms', 'PagesController@terms');



Route::get('projects/{id}', 'ProjectController@show');


Route::resource('posts', 'PostsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admins'], function () {
    Voyager::routes();
});
