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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Fontend\PageController@products')->name('products');

// Route::group(['prefix' => 'administration'],function(){
//     Route::get('/','AdminPagesController@index')->name('admin.index');
//     Route::get('/product','AdminPagesController@product_create');
//     Route::post('/product/store','AdminPagesController@product_store');
// });


                /////// For Admin ///////

Route::resource('/administration','Backend\AdminPagesController');


                /////// For AdminCategory ///////
                
Route::resource('/Category','Backend\CategoryController');