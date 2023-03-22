<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController as GuestHomepageController;

use App\Http\Controllers\Admin\TravelController as AdminTravelController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
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

Route::get('/', [GuestHomepageController::class, 'index'])->name('guest.home');
Route::post('/booking/store', [GuestHomepageController::class, 'bookingStore'])->name('guest.bookingStore');

Route::group(['prefix' => 'admin'], function()
{

    Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'authenticateAdmin'])->name('admin.login.authenticateAdmin');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'isAdmin'], function()
    {
        Route::group(['prefix' => 'travel'], function()
        {
            Route::get('/', [AdminTravelController::class, 'index'])->name('admin.travel');
            Route::get('/data', [AdminTravelController::class, 'data'])->name('admin.travel.data');
            Route::get('/create', [AdminTravelController::class, 'create'])->name('admin.travel.create');
            Route::post('/store', [AdminTravelController::class, 'store'])->name('admin.travel.store');
            Route::get('{id}/edit', [AdminTravelController::class, 'edit'])->name('admin.travel.edit');
            Route::get('{id}/detail', [AdminTravelController::class, 'show'])->name('admin.travel.show');
            Route::put('{id}/update', [AdminTravelController::class, 'update'])->name('admin.travel.update');
            Route::delete('{id}/delete', [AdminTravelController::class, 'delete'])->name('admin.travel.delete');
        });

        Route::group(['prefix' => 'booking'], function()
        {
            Route::get('/', [AdminBookingController::class, 'index'])->name('admin.booking');
            Route::get('/data', [AdminBookingController::class, 'data'])->name('admin.booking.data');
        });
    });
});