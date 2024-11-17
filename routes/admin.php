<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\LocationController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\SubserviceController;
use App\Http\Controllers\admin\PriceController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\FaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/admin',[HomeController::class,'index'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');

    // Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth.admin'])->name('admin.')->group(function () {

        // Service Managment Service Module
        Route::prefix('service')->name('service')->group(function(){
            Route::get('/active',[ServiceController::class,'active'])->name('.active');
            Route::get('/inactive',[ServiceController::class,'inactive'])->name('.inactive');
        });
        Route::resource('service', ServiceController::class);

        // Sub service Module
        Route::prefix('subservice')->name('subservice')->group(function(){
            Route::get('/active',[SubserviceController::class,'active'])->name('.active');
            Route::get('/inactive',[SubserviceController::class,'inactive'])->name('.inactive');
        });
        Route::resource('subservice', SubserviceController::class);

        // location Managment Module
        Route::prefix('location')->name('location')->group(function(){
            Route::get('/active',[LocationController::class,'active'])->name('.active');
            Route::get('/inactive',[LocationController::class,'inactive'])->name('.inactive');
        });
        Route::resource('location', LocationController::class);

        // location Managment Module
        Route::prefix('testimonial')->name('testimonial')->group(function(){
            Route::get('/active',[TestimonialController::class,'active'])->name('.active');
            Route::get('/inactive',[TestimonialController::class,'inactive'])->name('.inactive');
        });
        Route::resource('testimonial', TestimonialController::class);
        
        // location Managment Module
        Route::prefix('faq')->name('faq')->group(function(){
            Route::get('/active',[FaqController::class,'active'])->name('.active');
            Route::get('/inactive',[FaqController::class,'inactive'])->name('.inactive');
        });
        Route::resource('faq', FaqController::class);

        // Service Managment Module
        Route::prefix('service-page')->name('service-page')->group(function(){
            Route::get('/active',[LocationController::class,'active'])->name('.active');
            Route::get('/inactive',[LocationController::class,'inactive'])->name('.inactive');
        });
        Route::resource('service-page', LocationController::class);

        // price Managment Module
        Route::prefix('price')->name('price')->group(function(){
            Route::get('/active',[PriceController::class,'active'])->name('.active');
            Route::get('/inactive',[PriceController::class,'inactive'])->name('.inactive');
        });
        Route::resource('price', PriceController::class);

        // Car Managment Module
        Route::prefix('car')->name('car')->group(function(){
            Route::get('/active',[CarController::class,'active'])->name('.active');
            Route::get('/inactive',[CarController::class,'inactive'])->name('.inactive');
        });
        Route::resource('car', CarController::class);
        
        // Blog Managment Module
        Route::prefix('blog')->name('blog')->group(function(){
            Route::get('/active',[BlogController::class,'active'])->name('.active');
            Route::get('/inactive',[BlogController::class,'inactive'])->name('.inactive');
        });
        Route::resource('blog', BlogController::class);
        
        // CMS Managment Route System 
        Route::get('/page/create',function(){ return view('admin.page.create');});

        // Service Managment Service Module
        Route::prefix('page')->name('page')->group(function(){
            Route::get('/active',[PageController::class,'active'])->name('.active');
            Route::get('/inactive',[PageController::class,'inactive'])->name('.inactive');
        });
        Route::resource('page', PageController::class);

        Route::get('change-password',[HomeController::class,'ChangePasswordForm'])->name('password.change');
        Route::post('change-password',[HomeController::class,'ChangePassword'])->name('password.update');
        Route::get('/settings',[HomeController::class,'showSettingsForm'])->name('settings.change');
        Route::post('/settings/{id}',[HomeController::class,'updateSettings'])->name('settings.update');
    });
});



