
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




/**
 *
 *
 *  Admin Panel Controllers
 *
 * **/

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Web\Cart\CartController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\Product\ItemController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 *
 *
 *  Front End Routes
 *
 *
 * **/

// home Page
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');

});


/**  Product List Route  **/
Route::controller(ItemController::class)->group(function(){
    Route::get('/product','index');
    Route::get('/collection/{slug}','productDetail')->name('product.productDetail');

    /** Dispaly item According to  category**/
    Route::get('/category/{id}','categoryList');
});

/**  Product List Route  **/
Route::controller(CartController::class)->group(function(){
    Route::post('/add-cart','AddCart');


});



/**
 *
 *
 *  Admin Panel Routes
 *
 *
 * **/

Route::group(['prefix' => '/admin', 'as' => 'admin.'],function (){

    /** Loading Admin Login Route **/
    Route::match(['get','post'],'/',[DashboardController::class,'adminLogin'])->name('login');

    /**  Loading Protected Routes  **/
    Route::group(['middleware'=> 'admin'],function (){

        Route::controller(DashboardController::class)->group(function(){
            /** Loading Dashboard Route **/
            Route::get('/dashboard','dashboard')->name('dashboard');
            /** Loading Admin Logout Route **/
            Route::get('/admin-logout','logout')->name('adminLogout');
        });

        //products resource route

        Route::resource('products', ProductController::class);
        Route::controller(ProductController::class)->group(function()
        {
            Route::post('/status-update','statusUpdate')->name('products.status-update');
            Route::post('/publish-update','statusPublish')->name('products.publish-update');
            Route::post('/recommend-update','statusRecommend')->name('books.recommend-update');
        });
        // Loading Resource Route
        /** Loading Categories Route **/
        Route::resource('categories', CategoryController::class);
        /** Loading Categories Level Dependent Route **/
        Route::get('check-level',[CategoryController::class,'checkLevel']);
        Route::controller(CategoryController::class)->group(function(){
            Route::get('categoris/get-parent-categories', 'getParentCategories')->name('categories.get-parent-categories');
        });


    });




});
