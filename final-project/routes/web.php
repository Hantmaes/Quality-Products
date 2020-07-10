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

Route::get('/', 'MainPageController@slider', function () {
    return view('welcome');
})->name('main');

Route::get('/beers', 'BeerController@index')->name('beers.index');
Route::get('/beers/{beer_id}', 'BeerController@show');
Route::get('/checkout', 'DeliveryAddressController@checkout');
Route::post('/delivery', 'DeliveryAddressController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/{company_id}', 'CompanyController@show');

Route::post('/add-to-cart', 'CartController@add');
Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('stripe-payment', 'PaymentController@store')->name('stripe.store');
Route::get('/payments', 'PaymentController@checkout')->name('payments.checkout');

Route::post('/', 'SearchController@index')->name('search.index');

