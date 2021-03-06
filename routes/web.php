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
Route::get('/', 'FrontController@index')->name('index');
Route::get('/work', 'FrontController@all')->name('work');
Route::resource('articlepost', 'ArticleCatController');
Route::resource('contact','ContactController');

Route::post('/searcharticle', 'ArticleCatController@searcharticle')->name('searcharticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/**
 * Articles
 */
Route::resource('articles', 'ArticleController');

   
/**
 * Catégories
 */
Route::resource('categories','CategoryController');
// Route::get('/categories', function(){
//     return view('admin.categories.index');
// } );

// Route::get('/categories/posts', function(){
//     return view('admin.categories.posts');
// } );


/**
 * Emploi & Freelances
 */
Route::get('/freelances', function(){
    return view('admin.freelances.index');
} );

Route::get('/emplois', function(){
    return view('admin.emplois.index');
} );



