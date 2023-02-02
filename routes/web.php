<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TravelpackagesController;
use App\Http\Controllers\User\HomeController;
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

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('welcome,index');
    Route::get('pakettravel', 'pakettravel')->name('welcome.pakettravel');
})->middleware('guest');
// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('travelpackages', TravelpackagesController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home',[HomeController::class, 'index'])->name('home.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
