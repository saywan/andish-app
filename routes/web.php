<?php

use App\Http\Controllers\RoleController;
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
Route::get('/ConfirmMobile/{mobile}', 'HomeController@ShowConfirmMobile')->name('ShowConfirmMobile');
Route::post('SendVerifyEmail', 'HomeController@SendVerifyEmail')->name('SendVerifyEmail');
Route::get('VerifyAccount/{token}', 'HomeController@VerifyAccount')->name('VerifyAccount');
Route::get('/contactUs', 'HomeController@contactUs')->name('contactUs');
Route::get('/aboutUs', 'HomeController@aboutUs')->name('aboutUs');
Route::get('/shop', 'HomeController@showshop')->name('shop');
Route::post('/NewCart', 'HomeController@NewCart')->name('NewCart');
Route::get('/Cart', 'HomeController@showCart')->name('showCart');
Route::get('/template', 'HomeController@template')->name('template');
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

Route::group(['prefix' => 'portal', 'as' => 'portal.', 'middleware' => ['auth']], function () {


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


    Route::match(['get', 'post', 'put'], 'EmployeeActionServer', 'EmployeeController@EmployeeActionServer')->name('EmployeeActionServer');




   // Route::resource('roles',RoleController::class);

    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/index', 'AdminController@index')->name('portal.index');
    Route::post('logout', 'AdminController@logout')->name('logout');


    //Role
    Route::get('Role', 'RoleController@index')->name('Role');
    Route::get('CreateRole', 'RoleController@create')->name('createRole');
    Route::post('ChangeStatusUser', 'RoleController@ChangeStatusUser')->name('ChangeStatusUser');
    Route::get('Role/edit/{id}', 'RoleController@ShowEditUser')->name('portal.ShowEditUser');



    //User
    Route::get('User', 'UserController@listUser')->name('User');
    Route::get('CreateUser', 'UserController@createuser')->name('createuser');
    Route::post('ChangeStatusUser', 'UserController@ChangeStatusUser')->name('ChangeStatusUser');
    Route::get('User/edit/{id}', 'UserController@ShowEditUser')->name('portal.ShowEditUser');


    //Employment
    Route::get('Employee', 'EmployeeController@listEmployee')->name('Employee');
    Route::get('createEmployee', 'EmployeeController@createEmployee')->name('createEmployee');
    Route::post('ChangeStatusEmployee', 'EmployeeController@ChangeStatusEmployee')->name('ChangeStatusEmployee');
    Route::get('Employee/edit/{id}', 'EmployeeController@ShowEditEmployee')->name('portal.ShowEditEmployee');


    //Product
    Route::get('Product', 'ProductController@index')->name('Product');
    Route::get('CreateProduct', 'ProductController@create')->name('CreateProduct');
    Route::post('storeProduct', 'ProductController@store')->name('storeProduct');
    Route::post('getPriceProduct', 'ProductController@getPriceProduct')->name('getPriceProduct');
    Route::post('chooseTypePercent', 'ProductController@chooseTypePercent')->name('chooseTypePercent');
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



    //PercentProduct
    Route::get('PercentProduct', 'PercentProductController@index')->name('PercentProduct');
    Route::get('CreatePercentProduct', 'PercentProductController@create')->name('CreatePercentProduct');
    Route::post('storePercentProduct', 'PercentProductController@store')->name('storePercentProduct');
    Route::get('PercentProduct/edit/{id}', 'PercentProductController@edit')->name('EditPercentProduct');
    Route::post('UpdatePercentProduct', 'PercentProductController@update')->name('UpdatePercentProduct');
    Route::post('DeletePercentProduct', 'PercentProductController@destroy')->name('DeletePercentProduct');


    //Factor
    Route::get('Factor', 'FactorController@index')->name('Factor');
    Route::get('CreateFactor', 'FactorController@create')->name('CreateFactor');
    Route::post('storeFactor', 'FactorController@store')->name('storeFactor');
    Route::post('AddItemFactor', 'FactorController@AddItemFactor')->name('AddItemFactor');

    Route::post('DeleteCartItem', 'FactorController@DeleteCartItem')->name('DeleteCartItem');
    Route::post('DeleteCartItemFactor', 'FactorController@DeleteCartItemFactor')->name('DeleteCartItemFactor');
    Route::post('NewFactor', 'FactorController@NewFactor')->name('NewFactor');
    Route::post('ChangeStatusOrder', 'FactorController@ChangeStatusOrder')->name('ChangeStatusOrder');
    Route::get('Factor/show/{id}', 'FactorController@showFactor')->name('showFactor');
    Route::get('Factor/PrintPreview/{id}', 'FactorController@PrintPreview')->name('PrintPreview');
    Route::get('Factor/edit/{id}', 'FactorController@edit')->name('EditFactor');
    Route::post('UpdateFactor', 'FactorController@update')->name('UpdateFactor');
    Route::post('UpdateItemFactor', 'FactorController@UpdateItemFactor')->name('UpdateItemFactor');
    Route::post('DeleteFactor', 'FactorController@destroy')->name('DeleteFactor');

    Route::get('FinalFactor', 'FactorController@showFinalFactor')->name('FinalFactor');
    Route::get('FinalFactor/{id}', 'FactorController@detailsFinalFactor')->name('detailsFinalFactor');
    Route::post('ExportFinalFactor', 'FactorController@ExportFinalFactor')->name('DeleteFaExportFinalFactorctor');

    // ProcessExitProduct

    Route::post('ProcessExitProduct', 'FactorController@ProcessExitProduct')->name('ProcessExitProduct');


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


Route::group(['prefix' => 'User', 'as' => 'User.', 'middleware' => ['auth']], function () {


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


    Route::match(['get', 'post', 'put'], 'EmployeeActionServer', 'EmployeeController@EmployeeActionServer')->name('EmployeeActionServer');




    // Route::resource('roles',RoleController::class);

    Route::get('/', 'UserPanelController@index')->name('index');
    Route::get('/index', 'UserPanelController@index')->name('portal.index');
    Route::post('logout', 'UserPanelController@logout')->name('logout');


    //Role
    Route::get('Role', 'RoleController@index')->name('Role');
    Route::get('CreateRole', 'RoleController@create')->name('createRole');
    Route::post('ChangeStatusUser', 'RoleController@ChangeStatusUser')->name('ChangeStatusUser');
    Route::get('Role/edit/{id}', 'RoleController@ShowEditUser')->name('portal.ShowEditUser');



    //User
    Route::get('User', 'UserPanelController@listUser')->name('User');
    Route::get('CreateUser', 'UserPanelController@createuser')->name('createuser');
    Route::post('ChangeStatusUser', 'UserPanelController@ChangeStatusUser')->name('ChangeStatusUser');
    Route::get('User/edit/{id}', 'UserPanelController@ShowEditUser')->name('portal.ShowEditUser');


    //Employment
    Route::get('Employee', 'UserPanelController@listEmployee')->name('Employee');
    Route::get('createEmployee', 'UserPanelController@createEmployee')->name('createEmployee');
    Route::post('ChangeStatusEmployee', 'UserPanelController@ChangeStatusEmployee')->name('ChangeStatusEmployee');
    Route::get('Employee/edit/{id}', 'UserPanelController@ShowEditEmployee')->name('portal.ShowEditEmployee');





    //Factor
    Route::get('Factor', 'UserPanelController@listFactor')->name('Factor');
    Route::get('Factor/show/{id}', 'UserPanelController@showFactor')->name('showFactor');
    Route::get('Factor/PrintPreview/{id}', 'UserPanelController@PrintPreview')->name('PrintPreview');






});
