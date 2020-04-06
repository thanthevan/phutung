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

Route::get('/','HomeController@showHome')->name('homepage');


Route::get('danh-muc/{slug}',function() {

})->name('category');

Route::get('tin-tuc',function() {

})->name('home-article');

Route::get('lien-he',function() {

})->name('home-contact');

Route::get('gioi-thieu','HomeController@showInfo')->name('home-info');

Route::get('san-pham',function() {

})->name('home-product');

Route::get('/san-pham/{slug}',function() {
 return view('homepage.detail');
})->name('detail-product');

Route::post('/tim-kiem',function() {
  
   })->name('home-search');