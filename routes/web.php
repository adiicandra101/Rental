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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => true,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk admin
//Route::group(['prefix' => 'admin', 'middleware' =>['auth', 'role::admin']], function(){
//    Route::get('/', function(){
//        return 'Halaman Admin';
//    });
//    Route::get('profi', function(){
//        return 'Halaman Profil Admin';
//    });
//});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('mobil', function () {
        return view('mobil.index');
    })->middleware(['role:admin|pengguna']);
    Route::get('merek', function () {
        return view('merek.index');
    })->middleware(['role:admin']);
    Route::get('Sopir', function () {
        return view('Sopir.index');
    })->middleware(['role:admin']);
    Route::get('booking', function () {
        return view('booking.index');
    })->middleware(['role:admin']);

});

//hanya untuk pengguna
//Route::group(['prefix' => 'pengguna', 'middleware' =>['auth', 'role::pengguna']], function(){
//    Route::get('/', function(){
//        return 'halaman pengguna';
//    });
//   Route::get('profi', function(){
//        return 'Halaman Profil Pengguna';
//    });
//});
