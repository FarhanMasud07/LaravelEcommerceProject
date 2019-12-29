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

//Route::get('/','Fontend\PageController@products')->name('products');

Route::resource('/product', 'Fontend\PageController');

Route::resource('/shop', 'Fontend\ProductController');

// Route::group(['prefix' => 'administration'],function(){
//     Route::get('/','AdminPagesController@index')->name('admin.index');
//     Route::get('/product','AdminPagesController@product_create');
//     Route::post('/product/store','AdminPagesController@product_store');
// });


/////// For Admin ///////

Route::resource('/administration', 'Backend\AdminPagesController');


/////// For AdminCategory ///////

Route::resource('/Category', 'Backend\CategoryController');

/////// For Brand ///////
Route::resource('/Brand', 'Backend\BrandController');

Route::resource('/categories', 'Fontend\CategoryController');

Route::resource('/cart', 'Fontend\CartController');

Route::resource('/checkout', 'Fontend\CheckoutController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
