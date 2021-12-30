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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/Confirm/{email}', 'HomeController@ShowConfirm')->name('ShowConfirm');
Route::post('SendVerifyEmail', 'HomeController@SendVerifyEmail')->name('SendVerifyEmail');
Route::get('VerifyAccount/{token}', 'HomeController@VerifyAccount')->name('VerifyAccount');
Route::get('/contactUs', 'HomeController@contactUs')->name('contactUs');
Route::get('/aboutUs', 'HomeController@aboutUs')->name('aboutUs');
Route::get('/shop', 'HomeController@showshop')->name('shop');
Route::post('/NewCart', 'HomeController@NewCart')->name('NewCart');
Route::get('/Cart', 'HomeController@showCart')->name('showCart');
//Route::get('/auth/user', 'HomeController@showAuthForm')->name('showAuthForm');
Route::get('/Product/{slug}/{id}', 'HomeController@showSingleProduct')->name('showSingleProduct');



/*Route::get('Adminlogin', 'AdminController@showlogin')->name('portal.Adminlogin');
Route::get('AdminRegister', 'AdminController@register')->name('portal.AdminRegister');
Route::post('CreateAdminRegister', 'AdminController@CreateAdminRegister')->name('portal.CreateAdminRegister');
Route::get('/verifymobile/{mobile}', 'AdminController@verifymobile')->name('verifymobile');
Route::post('checkCodeSMS', 'AdminController@checkCodeSMS')->name('checkCodeSMS');
Route::post('checklogin', 'AdminController@checklogin')->name('portal.checklogin');
Route::get('portal/auth-recover-pw', 'AdminController@showlogin')->name('portal.auth-recover-pw');
Route::get('/logout', 'AdminController@logout')->name('portal.logout');*/


Route::group(['prefix' => 'portal', 'as' => 'portal.', 'middleware' => ['admin']], function () {


    Route::get('/cc', function () {
        Artisan::call('cache:clear');
        echo '<script>alert("cache clear Success")</script>';
    });
    Route::get('/ccc', function () {
        Artisan::call('config:cache');
        echo '<script>alert("config cache Success")</script>';
    });
    Route::get('/vc', function () {
        Artisan::call('view:clear');
        echo '<script>alert("view clear Success")</script>';
    });
    Route::get('/cr', function () {
        Artisan::call('route:cache');
        echo '<script>alert("route clear Success")</script>';
    });
    Route::get('/coc', function () {
        Artisan::call('config:clear');
        echo '<script>alert("config clear Success")</script>';
    });
    Route::get('/storage123', function () {
        Artisan::call('storage:link');
        echo '<script>alert("linked")</script>';
    });

    Route::match(['get', 'post', 'put'], 'ActionServer', 'AdminController@ActionServer')->name('ActionServer');

    Route::match(['get', 'post', 'put'], 'UserActionServer', 'UserController@UserActionServer')->name('UserActionServer');




    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/index', 'AdminController@index')->name('portal.index');
    Route::post('logout', 'AdminController@logout')->name('logout');


    //User
    Route::get('User', 'UserController@listUser')->name('User');
    Route::get('CreateUser', 'UserController@createuser')->name('createuser');
    Route::post('ChangeStatusUser', 'UserController@ChangeStatusUser')->name('ChangeStatusUser');
    Route::get('User/edit/{id}', 'UserController@ShowEditUser')->name('portal.ShowEditUser');


    //Product
    Route::get('Product', 'ProductController@index')->name('Product');
    Route::get('CreateProduct', 'ProductController@create')->name('CreateProduct');
    Route::post('storeProduct', 'ProductController@store')->name('storeProduct');
    Route::post('ChangeStatusProduct', 'ProductController@ChangeStatusProduct')->name('ChangeStatusProduct');
    Route::get('Product/edit/{id}', 'ProductController@edit')->name('portal.ShowEditProduct');
    Route::post('UpdateProduct', 'ProductController@update')->name('UpdateProduct');
    Route::post('DeleteProduct', 'ProductController@destroy')->name('DeleteProduct');


    //GroupProduct
    Route::get('GroupProduct', 'GroupProductController@index')->name('GroupProduct');
    Route::get('CreateGroupProduct', 'GroupProductController@create')->name('CreateGroupProduct');
    Route::post('storeGroupProduct', 'GroupProductController@store')->name('storeGroupProduct');
    Route::get('GroupProduct/edit/{id}', 'GroupProductController@edit')->name('EditGroupProduct');
    Route::post('UpdateProductGroup', 'GroupProductController@update')->name('UpdateProductGroup');
    Route::post('DeleteGroupProduct', 'GroupProductController@destroy')->name('DeleteGroupProduct');

    // Route::post('ChangeStatusProduct', 'UserController@ChangeStatusProduct')->name('ChangeStatusProduct');



    //Factor
    Route::get('Factor', 'FactorController@index')->name('Factor');
    Route::get('CreateFactor', 'FactorController@create')->name('CreateFactor');
    Route::post('storeFactor', 'FactorController@store')->name('storeFactor');
    Route::post('DeleteCartItem', 'FactorController@DeleteCartItem')->name('DeleteCartItem');
    Route::post('NewFactor', 'FactorController@NewFactor')->name('NewFactor');
    Route::post('ChangeStatusOrder', 'FactorController@ChangeStatusOrder')->name('ChangeStatusOrder');
    Route::get('Factor/show/{id}', 'FactorController@showFactor')->name('showFactor');
    Route::get('GroupProduct/edit/{id}', 'FactorController@edit')->name('EditGroupProduct');
    Route::post('UpdateProductGroup', 'FactorController@update')->name('UpdateProductGroup');
    Route::post('DeleteFactor', 'FactorController@destroy')->name('DeleteFactor');


    //Setting Part
    Route::get('Setting', 'SettingController@index')->name('Setting');
    Route::get('MangePage', 'SettingController@MangePage')->name('MangePage');
    Route::post('updateAboutPage', 'SettingController@updateAboutPage')->name('updateAboutPage');
    Route::post('updateContactPage', 'SettingController@updateContactPage')->name('updateContactPage');

   /* Route::get('CreateGroupProduct', 'SettingController@create')->name('CreateGroupProduct');
    Route::post('storeGroupProduct', 'SettingController@store')->name('storeGroupProduct');
    Route::get('GroupProduct/edit/{id}', 'SettingController@edit')->name('EditGroupProduct');
    Route::post('UpdateProductGroup', 'SettingController@update')->name('UpdateProductGroup');
    Route::post('DeleteGroupProduct', 'SettingController@destroy')->name('DeleteGroupProduct');*/



});
