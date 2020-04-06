<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$adminPrefix = 'cp/admin';

Route::group(['prefix' => $adminPrefix], function()
{

  Route::get('login','Admin\AuthController@showLoginForm')->name("admin-get-login");

  Route::post('login','Admin\AuthController@login')->name("admin-post-login");

  Route::post('logout','Admin\AuthController@logout')->name("admin-post-logout");

  Route::group(['middleware' => ['auth.dashboard']], function() {

      Route::get('dashboard','Admin\HomeController@showHomeView')->name('dashboard');

      Route::get('product/create','Admin\ProductController@showProductCreateView')->name('create-product');

      Route::post('product/create/new','Admin\ProductController@createProduct')->name('post-create-product');

      Route::get('product','Admin\ProductController@showProductView')->name('product');

      Route::get('product/category','Admin\CategoryController@showCategoryView')->name('product-category');
      
      Route::get('product/category/create','Admin\CategoryController@showCategoryCreateView')->name('product-category-create');
     
      Route::post('product/category/create/new','Admin\CategoryController@createCategory')->name('post-product-category-create');
      
      Route::get('product/category/edit/{id}','Admin\CategoryController@showCategoryEditView')->name('product-category-edit');

      Route::put('product/category/edit-category/{id}','Admin\CategoryController@updateCategory')->name('put-product-category-edit');

      Route::delete('product/category/delete-category/{id}','Admin\CategoryController@deleteCategory')->name('delete-product-category');
    
      Route::get('contact','Admin\CategoryController@showCategoryCreateView')->name('product-category-create');

      Route::get('file', function()
      {
        return view('vendor.adminlte.file_manager.manager');
      })->name('files');


      Route::get('info','Admin\InfoController@showView')->name('info');
      Route::get('info/edit','Admin\InfoController@editInfo')->name('edit-info');
      Route::post('info/update','Admin\InfoController@updateInfo')->name('update-info');
      //address
      Route::get('address','Admin\HomeController@showAddressView')->name('address');
      Route::get('create/view/address','Admin\HomeController@showCreateAddressView')->name('show-create-address');

      Route::get('address/show/{id}','Admin\HomeController@showAddress')->name('show-address');
      Route::post('address/create','Admin\HomeController@createAddress')->name('create-address');
      Route::post('address/update','Admin\HomeController@updateAddress')->name('update-address');

      //phone
      Route::get('phone','Admin\HomeController@showPhoneView')->name('phone');
       Route::get('create/view/phone','Admin\HomeController@showCreatePhoneView')->name('show-create-phone');
      Route::get('phone/show/{id}','Admin\HomeController@showPhone')->name('show-phone');
      Route::post('phone/create','Admin\HomeController@createPhone')->name('create-phone');
      Route::post('phone/update','Admin\HomeController@updatePhone')->name('update-phone');
      
  });
});
