<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
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


Route::get('/',[App\Http\Controllers\welcomeController::class,'index'])->name('welcome');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
//Route::get('contact', 'App\Http\Controllers\ContactController@show')->name('contact');
Route::post('contact', 'App\Http\Controllers\ContactController@sendEmail');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
//Route::post('contact', [ContactController::class, 'sendEmail'])->name('contact.us');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::post('/username', 'App\Http\Controllers\Auth\AuthController@username');
// Route::get('/acceuiladmin',[App\Http\Controllers\AcceuilAdminController::class,'index']);
Route::get('/loginadmin',[App\Http\Controllers\AdminController::class,'login']);
Route::post('/loginadmin',[App\Http\Controllers\AdminController::class,'submit_login']);
// Route::get('/logoutadmin',[App\Http\Controllers\AdminController::class,'logoutadmin']);
 Route::get('/logoutadmin', [AdminController::class, 'logoutadmin'])->name('logoutadmin'); 
 


Route::get('acceuiladmin2', 'App\Http\Controllers\TestController@index')->name('acceuiladmin2');
// Route::get('/brandspage',[TestController::class,'brandspage'])->name('brands');
//solution probleme Route "not define"

// Route::get('addproductpage', 'App\Http\Controllers\TestController@addproductpage')->name('addproductpage');

Route::resource('products', 'App\Http\Controllers\ProductController');
Route::get('products/category/{category}', 'App\Http\Controllers\welcomeController@getProductByCategory')->name("category.products");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/add/cart/{product}', 'App\Http\Controllers\CartController@addProductToCart')->name('add.cart');
Route::delete('/remove/{product}/cart', 'App\Http\Controllers\CartController@removeProductFromCart')->name('remove.cart');
Route::put('/update/{product}/cart', 'App\Http\Controllers\CartController@updateProductOnCart')->name('update.cart');

Route::get('/handle-payment', 'App\Http\Controllers\PaypalPaymentController@handlePayment')->name('make.payment');
Route::get('/cancel-payment', 'App\Http\Controllers\PaypalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('/payment-success', 'App\Http\Controllers\PaypalPaymentController@paymentSuccess')->name('success.payment');
//
Route::resource('order_items', 'App\Http\Controllers\order_itemsController');
//
Route::get('order_items', [App\Http\Controllers\order_itemsController::class,'index']);
Route::get('order_items/{id}', [App\Http\Controllers\order_itemsController::class,'show']);
//admin affichage
Route::get('dashboardpage', 'App\Http\Controllers\TestController@dashboardpage')->name('dashboardpage');
Route::get('orderspage', 'App\Http\Controllers\TestController@getorderspage')->name('orderspage');
Route::get('categoriespage', 'App\Http\Controllers\TestController@categoriespage')->name('categoriespage');
Route::get('productspage', 'App\Http\Controllers\TestController@getproductspage')->name('productspage');
Route::get('settingspage', 'App\Http\Controllers\TestController@settingspage')->name('settingspage');
//admin operation
Route::resource('tests', 'App\Http\Controllers\TestController');
//Route Category
// Route::get('/dashboard','App\Http\Controllers\Admin\FrontendController@index');
Route::get('/categories','App\Http\Controllers\Admin\CategoryController@index')->name('categories');
Route::get('add-category','App\Http\Controllers\Admin\CategoryController@add')->name('add-category');
Route::post('insert-category','App\Http\Controllers\Admin\CategoryController@insert');
Route::get('edit-category/{id}','App\Http\Controllers\Admin\CategoryController@edit')->name('edit-category/{id}');
Route::post('update-category/{id}','App\Http\Controllers\Admin\CategoryController@update')->name('update-category/{id}');
Route::get('delete-category/{id}','App\Http\Controllers\Admin\CategoryController@destroy')->name('delete-category/{id}');
//Fin Category
//Route Brands
Route::get('add-brand','App\Http\Controllers\Admin\BrandController@addpage')->name('add-brand');
Route::get('admin/brand','App\Http\Controllers\Admin\BrandController@index')->name('admin.brand');
Route::get('/editbrand/{brand_id}','App\Http\Controllers\Admin\BrandController@Edit');
Route::get('admin/brands/delete/{brand_id}','App\Http\Controllers\Admin\BrandController@Delete');
Route::get('admin/brands/inactive/{brand_id}','App\Http\Controllers\Admin\BrandController@Inactive');
Route::get('admin/brands/active/{brand_id}','App\Http\Controllers\Admin\BrandController@Active');
Route::post('admin/brand-update','App\Http\Controllers\Admin\BrandController@Update')->name('update.brand');  
Route::post('/brand-store', 'App\Http\Controllers\Admin\BrandController@store');
Route::get('productkitchen/{slug}',[App\Http\Controllers\TestController::class,'viewcategory']);  

Route::get('productlist',[App\Http\Controllers\TestController::class,'productlistAjax']);
Route::post('searchproduct',[App\Http\Controllers\TestController::class,'searchProduct']);
    
Route::get('shopnow',[App\Http\Controllers\shopnowController::class,'index'])->name('shopnow');
Route::post('review-store', 'App\Http\Controllers\BookingController@reviewstore')->name('review.store');
