<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TravelpackagesController;
use App\Http\Controllers\Admin\MetodepembayaranController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\TravelController;
use App\Http\Controllers\User\TransaksiuserController;
use App\Http\Controllers\WelcomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('guest')->name('welcome');

Route::controller(WelcomeController::class)->middleware('guest')->group(function () {
    Route::get('/', 'index')->name('welcome.index');
    Route::get('/pakettravel', 'pakettravel')->name('welcome.pakettravel');
});
// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('travelpackages', TravelpackagesController::class);
    Route::resource('metodepembayaran', MetodePembayaranController::class);
    Route::resource('transaksi', TransaksiController::class);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/home',[HomeController::class, 'index'])->name('home.index');
    Route::controller(TravelController::class)->group(function () {
        Route::get('/travelpaket', 'index')->name('pakettravel.index');
        Route::get('/travelpaket/{travelpaket}', 'show')->name('pakettravel.show');
    });
    Route::controller(TransaksiuserController::class)->group(function () {
        Route::get('/transaksiuser/{id}', 'create')->name('transaksiuser.index');
        Route::post('/transaksiuser', 'store')->name('transaksiuser.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
