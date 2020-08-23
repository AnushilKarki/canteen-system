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
   
    {
        return view('guest');
    }
});

Route::get('/welcome', function () {
 
    return view('welcome');
    
  
    
});
 
Route::get('/about',function()

    {
    return view('about');
 
})->name('about');



Route::get('/guestmenu',function(){
 
    return view('guestmenu');

    })->name('guestmenu');


  
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@welcome')->name('user');
Route::get('/menu', 'HomeController@menu')->name('menu');
    //for profile 
    Route::get('viewprofile','ProfileController@index')->name('viewprofile');

    Route::get('addprofile/{id}','ProfileController@add')->name('addprofile');
    Route::post('addprofile/{id}','ProfileController@save')->name('saveprofile');

    Route::get('editprofile','ProfileController@edit')->name('editprofile');
    Route::post('editprofile/{id}','ProfileController@update')->name('updateprofile');

Route::get('/cart/{id}', 'HomeController@cart')->name('cart');
Route::post('/addtocart/{foodid}/{id}', 'HomeController@addtocart')->name('addtocart');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register');
    Route::get('home', 'HomeController@index')->name('admin.home');
   
    Route::get('additem','HomeController@additem')->name('admin.additem');
    Route::post('additem','ItemController@save')->name('admin.add.item');
    Route::get('viewitem','ItemController@view')->name('admin.viewitem');
     //edit item 
    Route::get('edititem/{id}','ItemController@edit')->name('admin.edititem');
    Route::post('edititem/{id}','ItemController@update')->name('admin.edit.item');
    //del item
    Route::get('delitem/{id}','ItemController@delete')->name('admin.delitem');
    

    Route::get('enterstock/{id}','StockController@view')->name('admin.enter.stock');
    Route::post('enterstock/{id}','StockController@save')->name('admin.enterstock');
    Route::get('addstock','StockController@addstock')->name('admin.addstock');
    Route::get('viewstock','StockController@viewstock')->name('admin.viewstock');

    Route::get('vieworder','HomeController@vieworder')->name('admin.vieworder');
});
