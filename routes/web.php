<?php

use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Livewire\ContactUs;
use App\Livewire\PackersAndMovers;


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
include(base_path('routes/admin.php'));
// include(base_path('routes/branch.php'));

Route::get('/empty',[HomeController::class,'empty'])->name('empty');

Route::get('/all-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
   //  Artisan::call('optimize');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
   //  Artisan::call('optimize');
   return "All cleared successfully";
});

// language


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/all_services',[HomeController::class,'all_services'])->name('all_services');
Route::get('/tempo_service',[HomeController::class,'tempo_service'])->name('tempo_service');
Route::get('/indicab-packers-movers',[HomeController::class,'packers_movers'])->name('packers_movers');
Route::get('/cab',[HomeController::class,'cab'])->name('cab');

Route::get('/about',[HomeController::class,'about'])->name('about');

// Route::get('/{category}/{slug}',)
Route::get('/{service?}/{slug}',[HomeController::class,'post'])->name('web.post');