<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Stories;

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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
    return view('admin.layouts.home');
});

    Route::get('/a-panel', function () {
        return view('admin.layouts.home');
    });
    
    Route::resource('/offer', OfferController::class);
    Route::resource('/statistics', StatisticController::class);
    Route::resource('/orders', OrderController::class);
    Route::resource('/partners',PartnerController::class);
    
});

Route::get('/storage-link-artisan', function(){
    $exitCode = Artisan::call('storage:link', [] );
    echo $exitCode; // 0 exit code for no errors.
});
