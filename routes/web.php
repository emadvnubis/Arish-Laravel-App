<?php
use App\Product;
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
Auth::routes();  // First Line Is `Auth::routes();`

// Translation Path
Route::get('lang/{locale}', 'LocalizationController@index');

// define Welcome Page Path




// home page
Route::get('/products', 'ProductController@show_product');


Route::get('add/{id}', function ($id) {
  $prod = Product::find($id);
  $prod != null ? $prod->delete() : "";
  return redirect('products');
});

// home page
Route::get('/add-product', 'ProductController@add_product');
Route::post('/add-product', 'ProductController@store_product');


// home page
Route::get('/edit/{id}', 'ProductController@edit_product');
Route::post('/edit/{id}', 'ProductController@edit_product');




// Profile Paths
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
